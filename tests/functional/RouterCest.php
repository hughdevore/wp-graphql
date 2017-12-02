 <?php

 class RouterCest {

 	/**
	 * @test
	 * It should redirect requests to the /graphql endpoint
	 */
 	public function it_should_redirect_graphql_requests( \FunctionalTester $I ) {
	    $I->wantTo( 'Test that the "/graphql" endpoint redirects properly' );
	    $I->amOnPage( 'index.php/graphql' );
	    $I->seeCurrentUrlEquals( '/graphql' );
	    $I->lookForwardTo( 'am redirected to the /graphql endpoint' );
    }

	 /**
	  * @test
	  * It should redirect requests to the /graphql endpoint
	  */
	 public function it_should_send_headers( \FunctionalTester $I ) {
		 $I->wantTo( 'Send some headers' );
		 $I->haveHttpHeader( 'testHeader', 'Hughie' );
		 $I->sendAjaxGetRequest( '/graphql', [ 'query' => 'query{posts{edges{node{id,title,date,link}}}}' ] );
		 // Verify that testHeader is set
		 $I->lookForwardTo( 'see the test headers' );
	 }

 }