#!/bin/bash
echo "Build start..."
PIPE_DIR=`pwd`
echo "Pipeline Working dir..."
echo $PIPE_DIR

BUILD_DIR=$HOME/tmp/buildhome
echo "Buiding Dir... ->"$BUILD_DIR;
PRJ_DIR=$BUILD_DIR/$GO_PIPELINE_NAME

BUILD_VER=$GO_PIPELINE_LABEL
echo "Build Version: "$BUILD_VER

APP_DIR=$PRJ_DIR/$BUILD_VER
mkdir -p $APP_DIR
cp -R . $APP_DIR/


echo "-------------------------"
echo "Detecting PHP version..."
echo "-------------------------"
php -v

php -v  > "$PIPE_DIR"/my-artifact.html
$HOME/bin/composer --version >> "$PIPE_DIR"/my-artifact.html

cd $APP_DIR

echo "Entering App Deploying Dir.. ->"$APP_DIR

if [ -f ${APP_DIR}/composer.json ]; then
    echo "-------------------------"
    echo "Running composer..."
    echo "-------------------------"
    # Run Composer.

    COMPOSER_FLAGS='--no-scripts --no-dev --prefer-dist'

    cd ${APP_DIR} && \
            $HOME/bin/composer \
            install \
            --optimize-autoloader \
            --no-interaction \
            --no-ansi \
            --no-progress \
            ${COMPOSER_FLAGS}

fi

rm -rf .git

cd ..

tar zcvf $BUILD_VER.tar.gz $BUILD_VER/

cp $BUILD_VER.tar.gz "$PIPE_DIR"/build.tar.gz

echo "Build finished."