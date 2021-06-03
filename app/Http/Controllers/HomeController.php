<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Crypto\Rsa\KeyPair;
use Spatie\Crypto\Rsa\PrivateKey;
use Spatie\Crypto\Rsa\PublicKey;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		
		$exchangeRates = new ExchangeRate();
		//$result = $exchangeRates->exchangeRate('GBP', 'EUR');
		//dd($result);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		

		// generating an RSA key pair
		//[$privateKey, $publicKey] = (new KeyPair())->generate();

		// when passing paths, the generated keys will be written those paths
		//(new KeyPair())->generate($pathToPrivateKey, $pathToPublicKey);

		//$data = 'my secret data';

		//$privateKey = PrivateKey::fromFile($pathToPrivateKey);
		//$encryptedData = $privateKey->encrypt($data); // returns something unreadable

		//$publicKey = PublicKey::fromFile($pathToPublicKey);
		//$decryptedData = $publicKey->decrypt($encryptedData);
		//dd($decryptedData);
        return view('home');
    }

    public function adminHome()
    {
        return view('admin.dashboard');
    }
}
