<?

defined('C5_EXECUTE') or die("Access Denied.");
class Concrete5_Library_JavaScriptAsset extends Asset {
	
	public function getAssetDefaultPosition() {
		return Asset::ASSET_POSITION_FOOTER;
	}

	public function getAssetType() {return 'javascript';}

	public function getAssetDefaultMinify() {
		return true;
	}

	public function getAssetDefaultCombine() {
		return true;
	}

	public function populateAssetURLFromFilename($filename) {
		if ($this->local) {
			$this->assetURL = ASSETS_URL_JAVASCRIPT . '/' . $filename;
		} else {
			$this->assetURL = $filename;
		}
	}

	public function populateAssetPathFromFilename($filename) {
		if ($this->local) {
			$this->assetPath = DIR_BASE_CORE . '/js/' . $filename;
		}
	}

	public function __toString() {
		return '<script type="text/javascript" src="' . $this->getAssetURL() . '"></script>';
	}

}