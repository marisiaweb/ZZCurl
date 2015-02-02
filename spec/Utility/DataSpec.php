<?php

namespace spec\Utility;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DataSpec extends ObjectBehavior
{
    protected $test_data = ['test' => 'data', 'test2' => 'data2'];

    function let()
    {
        $this->beConstructedWith($this->test_data);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Utility\Data');
    }

    function it_should_return_constructed_data()
    {
        $this->getData()->shouldReturn($this->test_data);
    }
}
