<?php

class Heartbeat extends Plugin
{
	public function action_init() {
		$this->add_rule( "heartbeat", 'heartbeat' );
	}

	public function action_plugin_act_heartbeat() {
		Utils::redirect( Site::get_url( 'habari' ) );
	}
}
?>
