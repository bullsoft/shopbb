#!/bin/bash
echo "Build start..."

BUILD_DIR=$HOME/tmp/buildhome
echo "Buiding Dir... ->"$BUILD_DIR;
PRJ_DIR=$BUILD_DIR/$GO_PIPELINE_NAME
DEPLOY_VER=`date +%Y%m%d%H%M%S`
echo "ReleaseId: "$DEPLOY_VER

APP_DIR=$PRJ_DIR/$DEPLOY_VER
mkdir -p $APP_DIR
cp -R . $APP_DIR/
cd $APP_DIR

echo "Entering App Deploying Dir.. ->"$APP_DIR

echo "-------------------------"
echo "Detecting PHP version..."
echo "-------------------------"
php -v

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

echo "Build finished."