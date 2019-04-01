<?php
namespace ShBB\Backend\Tasks;

class HelloTask extends \Phalcon\CLI\Task
{
    public function initialize()
    {
        // 初始化
    }

    public function mainAction()
    {
        echo "Hello, Phalcon+ !" . PHP_EOL;
    }


    public function testAction()
    {
        $template = new \PhpOffice\PhpWord\TemplateProcessor("/Users/guweigang/Desktop/openAccountTemplate.docx");

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $imgUrl = '/Users/guweigang/Desktop/ms.png';
        $section->addImage($imgUrl, array(
            'width'         => 100,
            'height'        => 100,
            'marginTop'     => -1,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind'
        ));
        $ele = $section->getElements()[0];
        $template->setImageValue("userImage", $ele);
        $template->saveAs("/Users/guweigang/Desktop/ttt.docx");

        //var_dump($ele);exit;
        //$xml = new \PhpOffice\Common\XMLWriter();
        //$img = new \PhpOffice\PhpWord\Writer\Word2007\Element\Image($xml, $ele);
        //$img->write();

        //$template->replaceBlock('userImage', $xml->getData());
        //var_dump($xml->getData());
        //var_dump($phpWord);
        //$phpWord->save("/Users/guweigang/Desktop/aaa.docx");
    }
}
