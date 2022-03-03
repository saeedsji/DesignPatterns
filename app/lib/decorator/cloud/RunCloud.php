<?php

namespace App\lib\decorator\cloud;

class RunCloud {
    public function run() {
        //self::storeCreditCard(new CloudStream());
        //self::storeCreditCard(new EncryptedCloudStream(new CloudStream()));
        //self::storeCreditCard(new CompressedCloudSream(new CloudStream()));
        self::storeCreditCard(new EncryptedCloudStream(new CompressedCloudSream(new CloudStream())));
    }

    public static function storeCreditCard(Stream $stream) {
        $stream->write('1234-1234-3837-8747');
    }
}
