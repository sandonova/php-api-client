<?php
namespace Emis\News\Api\Proxy;

use Emis\Entity\Serializer;
use Emis\News\Api\Entity\UsageReport\Request;

class Usage extends Base
{
    public function report($documentId, \DateTime $accessTime)
    {
        $params = $this->getClient()->paramsAsArray($this, 'report', func_get_args());
        $this->getClient()->request('Usage', 'report', $params);
    }

    public function reportMultiple(Request $request, Serializer $serializer = null)
    {
        if (!$serializer) {
            $serializer = new Serializer();
        }
        
        $data = $serializer->serialize($request);

        $params = array('data' => $data);
        $this->getClient()->request('Usage', 'reportMultiple', $params);
    }
}