<?php
class VigilSchedulerTest extends WP_UnitTestCase {
	function testInstantiation() {
		$this->assertInstanceOf('VigilScheduler', new VigilScheduler);
	}
}
