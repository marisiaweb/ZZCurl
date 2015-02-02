<?php

namespace spec\Utility;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Utility\Data;

class PostSpec extends ObjectBehavior
{
    protected $dummy_url = 'http://dummy.url';

    function let()
    {
        $this->beConstructedWith($this->dummy_url);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Utility\Post');
    }

    function it_allows_you_to_set_data(Data $data)
    {
        $this->setData($data);
    }
}
