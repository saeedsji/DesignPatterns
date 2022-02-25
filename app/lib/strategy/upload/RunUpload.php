<?php

namespace App\lib\strategy\upload;

class RunUpload {
    public  function run()
    {
//        $imageStorage = new ImageStorage(new JpegCompressor(),new BlackAndWhiteFilter());
//        $imageStorage = new ImageStorage(new PngCompressor(),new BlackAndWhiteFilter());
        $imageStorage = new ImageStorage();
        $imageStorage->store('a',new JpegCompressor(),new BlackAndWhiteFilter());
        $imageStorage->store('a',new PngCompressor(),new BlackAndWhiteFilter());
    }
}
