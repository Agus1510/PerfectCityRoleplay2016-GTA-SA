#include <a_samp>
#define NombreServer1 "hostname Perfect City Nueva IP:177.54.157.233:7777"
#define NombreServer2 "hostname Perfect City Nueva IP:177.54.157.233:7777"
#define NombreServer3 "hostname Perfect City Nueva IP:177.54.157.233:7777"
new timernombres;

public OnFilterScriptInit()
{
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
