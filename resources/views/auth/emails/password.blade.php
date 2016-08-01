Click acá para reestablecer contraseña: <a href="{{ $link = route('auth.password.reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
