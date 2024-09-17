ifdef env
	env=testing
else
	env=local
endif

data:
	php artisan db:wipe --env=$(env)
	php artisan migrate --env=$(env)
	php artisan db:seed --env=$(env)
