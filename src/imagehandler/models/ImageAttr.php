<?php

namespace Ddata\UserAlbum\ImageHandler\Models;
/**
 * Description of Image
 *
 * @author victor
 */
class ImageAttr
{
    protected $path;
    protected $width;
    protected $height;
    protected $attr;
    protected $type;
    
    public function __construct($path = null)
    {
        if (null != $path) {
            $this->path = $path;
            $this->allocate();
        }
    }

    
    public function allocate()
    {
        $path = $this->path;
        if (file_exists($path)) {
            list($width, $height, $type, $attr) = getimagesize($path);
            $this->width = $width;
            $this->height = $height;
            $this->attr = $attr;
            $this->type = $type;
        }
    }
    
    public function getPath()
    {
        return $this->path;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }


}
