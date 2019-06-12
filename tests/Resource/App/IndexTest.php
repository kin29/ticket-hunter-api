<?php
namespace Kin29\TicketHunter\Resource\App;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @var ResourceInterface
     */
    private $resource;

    protected function setUp() : void
    {
        $this->resource = (new AppInjector('Kin29\TicketHunter', 'app'))->getInstance(ResourceInterface::class);
    }

    public function testOnGet()
    {
        $ro = $this->resource->get('app://self/', ['keyword' => 'BEAR.Sunday']);
        $this->assertSame(200, $ro->code);
        $this->assertSame('BEAR.Sunday', $ro->body['keyword']);
    }
}
