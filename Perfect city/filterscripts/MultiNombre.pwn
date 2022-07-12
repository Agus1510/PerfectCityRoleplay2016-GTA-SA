#include <a_samp>
#define NombreServer1 "hostname |¤|>•>[PerfectCity RolePlay v1.0]<•<|¤|"
#define NombreServer2 "hostname |¤|>•>El mejor rol esta aquí<•<|¤|"
#define NombreServer3 "hostname |©| Stats de $50k y Nivel 2 |®|"
#define weburl "weburl Perfectcity-rp.com"
new timernombres;

public OnFilterScriptInit()
{
    SendRconCommand(weburl);
	print("\n--------------------------------------");
	print(" Host Nombre - Cargando ");
	print("--------------------------------------\n");
	timernombres = SetTimer("RandomNombres",500,1);
	return 1;
}

public OnFilterScriptExit()
{
	KillTimer(timernombres);
	return 1;
}

forward RandomNombres();
public RandomNombres()
{
    new rsrcm = random(4);
    switch(rsrcm)
    {
	    case 0: SendRconCommand(NombreServer1);
	    case 1: SendRconCommand(NombreServer2);
	    case 2: SendRconCommand(NombreServer3);
	}
	return 1;
}
