#!/bin/bash
echo "Build start..."
PIPE_DIR=`pwd`
echo "Pipeline Working dir... ->" $PIPE_DIR

PRJ_NAME="shopbb"
BUILD_DIR=$HOME/tmp/buildhome

echo "Buiding dir... ->" $BUILD_DIR;
PRJ_DIR=$BUILD_DIR/$PRJ_NAME

DATE=`date '+%Y%m%d_%H%M%S'`
BUILD_VER=${DATE}_${GO_PIPELINE_COUNTER}

echo "Build Version: "$BUILD_VER

APP_DIR=$PRJ_DIR/$BUILD_VER
if [ ! -d $APP_DIR ]; then
  mkdir -p $APP_DIR
fi

cp -R . $APP_DIR/


echo "-------------------------"
echo "Detecting PHP version..."
echo "-------------------------"
php -v

echo $PRJ_NAME  > "$PIPE_DIR"/my-artifact.html
echo $BUILD_VER >> "$PIPE_DIR"/my-artifact.html

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

mv $BUILD_VER.tar.gz "$PIPE_DIR"/build.tar.gz

echo "Build finished."