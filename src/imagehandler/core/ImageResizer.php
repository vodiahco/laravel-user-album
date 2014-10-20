<?php

namespace Ddata\UserAlbum\ImageHandler\Core;

use Ddata\UserAlbum\ImageHandler\Models\ImageAttr;
use \Imagick;

/**
 * Description of ImageResizer
 *
 * @author victor
 */
class ImageResizer
{
    /**
     *
     * @var \Ddata\UserAlbum\\ImageHandler\Models\ImageAttr 
     */
    protected $imageAttr;
    
    /**
     *
     * @var \Imagick 
     */
    protected $imagick;
    
    protected $path;

    public function setImageAttrFromPath($path)
    {
        if (file_exists($path)) {
            $this->path = $path;
            $imageAttr = new ImageAttr($path);
            $this->imageAttr = $imageAttr;
            $this->imagick = new Imagick($path);
        }
    }
    
    public function getImageAttr()
    {
        return $this->imageAttr;
    }

    public function setImageAttr(\Ddata\UserAlbum\ImageHandler\Models\ImageAttr $imageAttr)
    {
        $this->imageAttr = $imageAttr;
    }
    
    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }
    
    /**
     * resetImageAttr
     * resets object with current attributes
     */
    protected function resetImageAttr()
    {
        $this->imageAttr = new ImageAttr($this->path);
    }

    
    public function resizeImage($width, $height)
    {
        $this->imagick->readimage($this->path);
        $this->imagick->resizeimage($width, $height, \Imagick::FILTER_LANCZOS, 0.9, true);
        $this->imagick->writeImage($this->path);
        $this->resetImageAttr();
    }
    
}
