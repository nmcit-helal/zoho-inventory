<?php
namespace Dfe\ZohoInventory\T;
use Dfe\ZohoInventory\Settings as S;
use Dfe\ZohoInventory\API\Facade as F;
// 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {echo S::s()->token();}

	/** 2017-07-05 */
	function t02_organizations() {echo df_json_encode_pretty(F::organizations());}

	/** @test 2017-07-06 */
	function t03_invalid() {echo df_json_encode_pretty(F::p('invalid'));}
}