<?php
	class person {
		var $name;

		function __construct($persons_name) {
			$this->name = $persons_name;
		}
		protected function set_name($new_name) {
			if ($new_name != "tae") {
				$this->name = "<span style='color: red;'>".$new_name."</span>" ." [tinawag ulit yung method sa parent class]";
			} else {
			        $this->name = "<span style='color: brown; font-weight: bold;'>".strtoupper($new_name)." naman oh"."</span>";
			}
		}
		public function get_name() {
			return $this->name;
		}
	}
	
	class employee extends person {
		function __construct($employee_name) {
			$this->set_name($employee_name);
		}
		protected function set_name($new_name) {
			if ($new_name == "employee") {
				$this->name = "<span style='color: green;'>".strtoupper($new_name)."</span>" ." [in-override nya] <i>Shet English yun ah.</i>";
			} else {
				parent::set_name($new_name); // ganito sya kapag gusto mo e override yung method na inoverrode mo.
			}
		}
	}
	
	class boss extends person {
		// basta tatawagin lang nya yung parent class, so kahit wala kana gawin dito
	}
?>

