#ECHO OFF

call env_win.cmd
cd %SCRIPTROOT%

%OPENLDAPROOT%\slapadd -l %OPENLDAPSCHEMAPATH%\core.ldif 
%OPENLDAPROOT%\ClientTools\ldapmodify -c -a -h localhost -x -D "%LDAPADMINUSER%" -w %LDAPADMINPASSWORD% -f %USERINFOPATH%\Customer.ldif
%PYTHONROOT%\python convUsertableToLdif.py %USERINFOPATH%/%USERTABLE_CSV_FILENAME% > %USERINFOPATH%\DeptAndPeople.ldif
%OPENLDAPROOT%\ClientTools\ldapmodify -c -a -h localhost -x -w %LDAPADMINPASSWORD% -D "%LDAPADMINUSER%" -f %USERINFOPATH%\DeptAndPeople.ldif

