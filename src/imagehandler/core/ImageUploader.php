<?php


namespace Ddata\UserAlbum\ImageHandler\Core;

/**
 * Description of ImageUploader
 *
 * @author victor
 */
class ImageUploader implements ImageUploaderInterface
{
    protected $imageDir;
    //protected $mobileVersionDir;
    /**
     *
     * @var \Ddata\UserAlbum\ImageHandler\Core\ImageResizer
     */
    protected $resizer;
    
    protected $versionSizes = array();

    public function __construct( $resizer, $imageDir, $versionSizes)
    {
        $this->imageDir = $imageDir;
        $this->resizer = $resizer;
        $this->versionSizes = $versionSizes;
    }
    
    public function upload()
    {
        
    }

//put your code here
}
