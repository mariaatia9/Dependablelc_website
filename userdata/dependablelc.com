--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/dependablelc.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/dependablelc.com-bytes_log
documentroot: /home/dependablelc/public_html
group: dependablelc
hascgi: 1
homedir: /home/dependablelc
ip: 198.54.126.42
owner: glomalda
phpopenbasedirprotect: 1
port: 81
scriptalias: 
  - 
    path: /home/dependablelc/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@dependablelc.com
serveralias: mail.dependablelc.com www.dependablelc.com
servername: dependablelc.com
usecanonicalname: 'Off'
user: dependablelc
