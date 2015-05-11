<?php
class GetInfo extends PHPUnit_Framework_TestCase
{
	public function testGetQuality()
	{
		$this->assertEquals(get_quality(1),"Mới hoàn toàn");
		$this->assertEquals(get_quality(2),"Như mới");
		$this->assertEquals(get_quality(3),"Rất tốt");
		$this->assertEquals(get_quality(4),"Tốt");
		$this->assertEquals(get_quality(5),"Chấp nhận được");
		$this->assertEquals(get_quality(6),"Rất cũ");
	}

	public function testGetSale()
	{
		$this->assertEquals(get_sale(50,100),"50.00");
		$this->assertEquals(get_sale(40,200),"80.00");
		$this->assertEquals(get_sale(70,70),"100.00");
		$this->assertEquals(get_sale(56,78),"71.79");
	}

	public function testFormatPrice()
	{
		$this->assertEquals(format_price(56),"56,000 VND");
		$this->assertEquals(format_price(123),"123,000 VND");
		$this->assertEquals(format_price(2345),"2,345,000 VND");
	}
}
?>