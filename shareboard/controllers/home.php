<?php
class Home extends Controller {
	protected function Index() {
		//echo 'HOME/INDEX';
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}
?>