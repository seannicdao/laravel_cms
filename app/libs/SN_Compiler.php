<?php
class SN_Compiler {
	public function __construct() {  }

	public function compile_dir($dir, $s, $d) {
		$updated = false;
		foreach (glob($dir) as $pathname) {
			if (is_dir($pathname)) {
				self::compile_dir($pathname.'/*', $s, $d);
			} else {
				if (self::compile_file($pathname, $s, $d))
					$updated = true;
			}
		} return $updated;
	}

	public function compile_file($filename, $s, $d) {
		//Get File Extension
		$ext = explode('.', $filename);
		$ext = end($ext);

		//Create Path for New File
		$s = str_replace('*', '', $s);
		$d = str_replace($s, $d, $filename);
		
		switch ($ext) {
			case 'haml':
				$d =  str_replace(".$ext", '.php', $d);

				if (!file_exists($d) || filemtime($filename) > filemtime($d)) {
					$parser = new HamlPHP(new FileStorage(app_path() . '/assets/haml/tmp/'));
					$content = $parser->parseFile($filename);
					file_put_contents($d, $content);
					return 1;
				} else {
					return 0;
				} break;
			case 'coffee':
				$d =  str_replace(".$ext", '.js', $d);

				if (!file_exists($d) || filemtime($filename) > filemtime($d)) {
					$coffee = file_get_contents($filename);
					$js = CoffeeScript\Compiler::compile($coffee, array('filename' => $filename));
					file_put_contents($d, $js);
					return 1;
				} else {
					return 0;
				} break;
			default:
		} return 0;
	}
}
?>