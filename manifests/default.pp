# Set path globally
Exec {
	path => [ "/usr/local/sbin", "/usr/local/bin", "/usr/sbin", "/usr/bin", "/sbin", "/bin" ],
}

exec { 'download-phing':	
	cwd => '/vagrant',
	command => 'wget http://www.phing.info/get/phing-latest.phar -O phing.phar',
	creates => '/vagrant/phing.phar'
}
