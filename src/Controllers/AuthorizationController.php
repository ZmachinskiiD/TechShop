<?php

declare(strict_types=1);

namespace Up\Controllers;

use Exception;
use Up\Services\AuthenticationService;
use Up\Services\Repository\ProductService;
use Up\Services\Repository\UserService;

class AuthorizationController extends BaseController
{
	/**
	 * @throws Exception
	 */
	public function authAction()
	{
		session_start();
		$user = UserService::getUserByEmail($_POST['email']);
		if (AuthenticationService::authenticateUser($user,$_POST['email'],$_POST['password'],true))
		{
			$_SESSION['AdminId']=$user->id;
			$_SESSION['AdminEmail']=$user->email;
			header("Location: /admin/");
		}
		if (AuthenticationService::authenticateUser($user,$_POST['email'],$_POST['password'],false))
			{
				$_SESSION['UserId']=$user->id;
				$_SESSION['UserEmail']=$user->email;
				header("Location: /account/");
			}
		else{
			return $this->render('login', ['authError' => 'Invalid login or password']);
		}
	}

	public function logOutAction(): void
	{
		session_start();
		session_unset();
		header('Location: /');
	}
}

