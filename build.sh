#!/bin/bash
echo "-------------------------"
echo "Build start..."
echo "-------------------------"

PIPE_DIR=`pwd`
echo "Pipeline Working dir... ->" $PIPE_DIR

PRJ_NAME="shopbb"
BUILD_DIR=$HOME/tmp/buildhome

echo "Buiding dir... ->" $BUILD_DIR;
PRJ_DIR=$BUILD_DIR/$PRJ_NAME

DATE=`date '+%Y%m%d_%H%M%S'`
if [ -z ${GO_PIPELINE_COUNTER+x} ]; then 
  if [ -f "artifact.html" ]; then
    GO_PIPELINE_COUNTER=$(expr $(cat artifact.html | tail -1 | cut -d "_" -f 3) + 1)
  else
    GO_PIPELINE_COUNTER=1
  fi
fi

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

echo $PRJ_NAME  > "$PIPE_DIR"/artifact.html
echo $BUILD_VER >> "$PIPE_DIR"/artifact.html

cd $APP_DIR

echo "-------------------------"
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

echo "-------------------------"
echo "Do some clearing..."
echo "-------------------------"

echo "Removing .git dir"
rm -rf .git

echo "Removing .vscode dir"
if [ -d .vscode  ]; then
  rm -rf .vscode
fi

echo "Removing .zephir dir"
if [ -d .zephir ]; then
  rm -rf .zephir
fi

echo "Removing older build.tar.gz file"
if [ -f build.tar.gz ]; then
  rm -f build.tar.gz
fi

echo " ... Done."

cd ..

tar zcf $BUILD_VER.tar.gz $BUILD_VER/

echo "----------------------"
echo "Copying tarbar to remote node-qd-00" 
echo "----------------------"
echo " KB             filename"
du -k $BUILD_VER.tar.gz
scp $BUILD_VER.tar.gz work@node-qd-00.bullsoft.org:/home/work/deployment/shopbb/releases/$BUILD_VER.tar.gz
echo " ... Done."

echo "----------------------"
echo "Copying tarbar to remote node-qd-01" 
echo "----------------------"
echo " KB             filename"
du -k $BUILD_VER.tar.gz
scp $BUILD_VER.tar.gz work@node-qd-01.bullsoft.org:/home/work/deployment/shopbb/releases/$BUILD_VER.tar.gz
echo " ... Done."

echo "----------------------"
echo "Deploying on node-qd-00"
echo "----------------------"
ssh work@node-qd-00.bullsoft.org BUILD_VER=$BUILD_VER 'bash -s' <<'BULLSOFT'
/home/work/bin/appdep.sh shopbb $BUILD_VER
BULLSOFT

echo " ... Done. Complete 1/2 ... "

echo "----------------------"
echo "Deploying on node-qd-00"
echo "----------------------"
ssh work@node-qd-01.bullsoft.org BUILD_VER=$BUILD_VER 'bash -s' <<'BULLSOFT'
/home/work/bin/appdep.sh shopbb $BUILD_VER
BULLSOFT

echo " ... Done. Complete 2/2 ... "

mv $BUILD_VER.tar.gz "$PIPE_DIR"/build.tar.gz

echo "----------------------"
echo "Build finished."