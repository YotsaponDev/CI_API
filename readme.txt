1.Config base url.
C:\xampp\htdocs\CI_API\application\config
	$config['base_url'] = 'api.boss.com';

2.Add DocumentRoot and config ServerName
C:\xampp\apache\conf\extra\httpd-vhosts
	<VirtualHost *:80>
    		DocumentRoot "C:/xampp/htdocs/CI_API/public/"
    			ServerName api.boss.com
    			<Directory "C:/xampp/htdocs/CI_API/public/">
        		Order allow,deny
        	Allow from all
   	 	</Directory>   
	</VirtualHost>

3.Add url for run localhost
C:\Windows\System32\drivers\etc\hosts
	example :> localhost  127.0.0.1 
	add	:> localhost  api.boss.com 
