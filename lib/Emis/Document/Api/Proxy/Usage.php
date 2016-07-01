<?php
namespace Emis\Document\Api\Proxy;

use Emis\Entity\Serializer;
use Emis\Entity\Api\UsageReport\Request;

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

        $stdClass = $serializer->asStdClass($request);
        $data = $serializer->serialize($stdClass);

        $params = array('data' => $data);
        $this->getClient()->request('Usage', 'reportMultiple', $params);
    }
}