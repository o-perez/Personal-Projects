//IMportamos las clases necesarias
#include <iostream>
#include <string>
#include <fstream>
#include <set>
#include <vector>
#include <algorithm>
#include <map>

/*Creacion de la clase TelefonoMovil la cual tendra como objetivo permitir
la creacion de los telefonosmoviles(objetos). Esta clase no contiene
ninguna condición.

El autor de la clase con todos sus componentes y funciones es Orlando X. Pérez Varela
Fecha de creacion: 30 de agosto de 2023.*/
class TelefonoMovil
{

//Creamos y establecemos cuales seran los atributos de la clase los cuales van a ser privados.
private:
	std::string marca,
		marcaAGuardar,
		modelo,
		modeloAGuardar;
	float precio,
		precioAGuadar;
	int inventario,
		inventarioAGuardar;

//Creamos y establecemos constructores y funciones que van a ser publicas. 
public:
	/*Constructor de la clase sin ningun argumento. Tendra como objetivo
	crear un objeto de la clase con valores especificados en marca,
	modelo, precio e inventario de manera automatica.*/
	TelefonoMovil()
	{
		marca = "Robei";
		modelo = "Horizon";
		precio = 1,299.99;
		inventario = 4;
	}

	//Constructor de la clase con argumentos.
	TelefonoMovil(std::string mrca, std::string mdlo, float prc, int ivtrio)
	{
		//Guardamos el valor de los diferentes argumentos en los atributos de la clase
		marca = mrca;
		modelo = mdlo;
		precio = prc;
		inventario = ivtrio;
	}

	//Funcion para imprimir el arreglo.
	void imprimirMovil()
	{
		std::cout << marca << "\n" << modelo << "\n" << precio << "\n" << inventario << std::endl;
	}

	//Función para establecer un nuevo valor al atributo marca.
	void setMarca(std::string marca)
	{
		this->marca = marca;
	}

	//Función para obtener el valor del atributo marca.
	std::string getMarca()
	{
		return this->marca;
	}

	//Función para establecer un nuevo valor al atributo modelo.
	void setModelo(std::string modelo)
	{
		this->modelo = modelo;
	}

	//Función para obtener el valor del atributo modelo.
	std::string getModelo()
	{
		return this->modelo;
	}

	//Función para establecer un nuevo valor al atributo precio.
	void setPrecio(float precio)
	{
		this->precio = precio;
	}

	//Función para obtener el valor del atributo precio.
	float getPrecio()
	{
		return this->precio;
	}

	//Función para establecer un nuevo valor al atributo inventario.
	void setInventario(int inventario)
	{
		this->inventario = inventario;
	}

	//Función para obtener el valor del atributo inventario.
	int getInventario()
	{
		return this->inventario;
	}
};

/*El objetivo de este metodo es de encontrar el valor del inventario por marca y modelo
multiplicando cantidad de inventario por precio.
*/
void encontrarValorInventario_Marca_Modelo(TelefonoMovil buscarEnArr[], int length4)
{
	//Declaramos las variables necesarias para el funcionamiento del método.
	std::string buscarInvMarca,
				buscarInvModelo,
				posicionMarcaActual,
				posicionModeloActual;
	
	int inventarioAEncontrar,
		posicionDeBuscador;
	
	float valorDelInventario,
		  precioAEncontrar;
	
	bool encontrado = false;

	/*Ciclo "do while" que se mantendra preguntando por la marca y modelo
	hasta que se encuentre en el arreglo.*/
	do
	{
		
		std::cout << "Buscar valor de inventario por marca y modelo.\n";// Se le notificara al usuario que estara haciendo.
		std::cout << "Entre la marca: ";//Se le preguntara la marca al usuario.
		std::cin >> buscarInvMarca;//Se guardar el input entrado.
		std::cout << "Entre el modelo: ";//Se le preguntara el modelo al usuario.
		std::cin >> buscarInvModelo;//Se guardara el input entrado.

		/*Ciclo "for" para movernos por el arreglo de objetos*/
		for (posicionDeBuscador = 0; posicionDeBuscador < length4; posicionDeBuscador++)
		{
			//Se guardaran los valores de la marca y modelo de la posición actual en arreglo.
			posicionMarcaActual = buscarEnArr[posicionDeBuscador].getMarca();
			posicionModeloActual = buscarEnArr[posicionDeBuscador].getModelo();

			/*Condicion que determina si el valor entrado de marca y modelo coinciden con los de la posicion actual.
			De coincidir se guardaran la cantidad de inventario y precio del telefono en esa posicion. Luego se multiplica
			la cantidad de inventario por el precio para obtener el valor y se guarda en una variable. Por último, se imprime
			el valor de inventario.*/
			if (buscarInvMarca == posicionMarcaActual && buscarInvModelo == posicionModeloActual)
			{
				inventarioAEncontrar = buscarEnArr[posicionDeBuscador].getInventario();
				precioAEncontrar = buscarEnArr[posicionDeBuscador].getPrecio();
				valorDelInventario = inventarioAEncontrar * precioAEncontrar;
				std::cout << "El valor de inventario para la marca: " << buscarInvMarca << " y el modelo: " << buscarInvModelo <<
					" es de $" << valorDelInventario << std::endl;
				encontrado = true;
			}
		}
		//Condición que determina que si no se ha encontrado una coincidencia se le notifica al usuario.
		if (encontrado != true && posicionDeBuscador != length4)
		{
			std::cout << "No se ha encontrado ningun movil con esa marca y modelo. Intente otra vez." << std::endl;
		}
	} while (encontrado != true);
}

/*El objetivo de este método es sumar todos los inventarios.
*/
void sumarInventario(TelefonoMovil sumaInventario[], int length3)
{
	//Variable necesaria en el método.
	int sumaTotal = 0;

	//Ciclo "for" para movernos por el arreglo de objetos y obtener el inventario de cada objeto y sumarlo.
	for (int obtenerInventario = 0; obtenerInventario < length3; obtenerInventario++)
	{
		sumaTotal = sumaTotal + sumaInventario[obtenerInventario].getInventario();
		
	}
	std::cout << sumaTotal << std::endl;// Imprimimos la suma de los inventarios.
}

/*Método para guardar el arreglo en el archivo de tipo void. El objetivo de este 
metodo es guardar el contenido del arreglo de objeto en el archivo.
*/
void guardarTelefonos(TelefonoMovil arregloAGuardar[], int length2)
{
	std::ofstream guardarEnArchivo("Telefonos.txt");//Creamos el manejador del archivo para poder guardar el arreglo.

	//Condición que determina si se pudo abrir el archivo y de cumplirse imprime un mensaje de error.
	if (!guardarEnArchivo)
	{
		std::cerr << "No se pudo abrir archivo" << std::endl;
		exit(1);
	}

	//Ciclo "for" para movernos por el arreglo.
	for (int guardarPosicion = 0; guardarPosicion < length2; guardarPosicion++)
	{
		/*Obtenemos los diferentes el valor de los diferentes atributos de los objetos en el
		arreglo a traves de las funciones getters de la clase TelefonoMovil.*/
		guardarEnArchivo << arregloAGuardar[guardarPosicion].getMarca() << std::endl;
		guardarEnArchivo << arregloAGuardar[guardarPosicion].getModelo() << std::endl;
		guardarEnArchivo << arregloAGuardar[guardarPosicion].getPrecio() << std::endl;
		guardarEnArchivo << arregloAGuardar[guardarPosicion].getInventario() << std::endl;
	}

	guardarEnArchivo.close(); //Cerramos el manejador de archivos.
}

/*Método para mostrar el arrelglo de tipo booleano. El método devolvera un valor booleano.
El objetivo del método es mostrar el contenido del arreglo.
*/
bool mostrarArreglo(TelefonoMovil arregloRecibido[], int length)
{
	bool impresionTerminada;//Creamos la variable de tipo booleana

	//Ciclo "for" para movernos por el arreglo.
	for (int imprimirPosicion = 0; imprimirPosicion < length; imprimirPosicion++)
	{
		//Imprimimos el objeto en la posicion actual del arreglo a traves de la función imprimirMovil de la clase TelefonoMovil.
		arregloRecibido[imprimirPosicion].imprimirMovil();
	}

	//Establecemos un valor a la variable impresionTerminada y devolvemos su valor.
	impresionTerminada = true;
	return impresionTerminada;
}

/*Creamos el metodo crearArreglo para crear los arreglos. El objetivo es manejar 
el archivo para poder crear  el arreglo de objetos con usando la lectura del 
archivo.
*/
bool crearArreglo(std::string archivo, bool seleccionPrevia, int opcionRecibida)
{
	//Creamos las variables correspondientes del método.
	std::string marcaDeArchivo,
		modeloDeArchivo;
	float	precioDeArchivo;

	int posicion,
		posicion2 = 0,
		inventarioDeArchivo;

	bool terminoArreglo = false;

	std::ifstream abrirContenido(archivo);//Creamos el manejador del archivo para poder crear el arreglo.
	
	TelefonoMovil telefonos[15];//Creamos el arreglo necesario.

	//Estructura try and catch para manejar el el archivo y arreglo.
	try
	{
		//Condicion que determina si ya se habia abierto el archivo anterior mente.
		if (seleccionPrevia == false)
		{
			//Condición que determina si se pudo abrir el archivo.
			if (abrirContenido.is_open())
			{
				//Ciclo "for" para movernos y poder crear el arreglo.
				for (posicion = 0; !abrirContenido.eof(); posicion++)
				{
					//Obtenemos el contenido de las lineas del archivo y lo guardamos en las diferentes variables de la función y creamos el arreglo.
					abrirContenido >> marcaDeArchivo;
					abrirContenido >> modeloDeArchivo;
					abrirContenido >> precioDeArchivo;
					abrirContenido >> inventarioDeArchivo;
					telefonos[posicion] = { TelefonoMovil(marcaDeArchivo, modeloDeArchivo, precioDeArchivo, inventarioDeArchivo) };
				}

			//Condición que determina si se llego al final del archivo y si se pudo leer.
				if (abrirContenido.eof())
				{
					//Cerramos el manejador del archivo y llamamos al método mostrar arreglo
					abrirContenido.close();
					//posicion2 = posicion;
					terminoArreglo = mostrarArreglo(telefonos, posicion);
				}

				else
				{
					throw "No se pudo leer el archivo.";
				}
			}

			else
			{
				throw "No existe un archivo con ese nombre.";
			}

		}

		else
		{
			//Condición que determina si se pudo abrir el archivo.
			if (abrirContenido.is_open())
			{
				//Ciclo "for" para movernos y poder crear el arreglo.
				for (posicion = 0; !abrirContenido.eof(); posicion++)
				{
					//Obtenemos el contenido de las lineas del archivo y lo guardamos en las diferentes variables de la función y creamos el arreglo.
					abrirContenido >> marcaDeArchivo;
					abrirContenido >> modeloDeArchivo;
					abrirContenido >> precioDeArchivo;
					abrirContenido >> inventarioDeArchivo;
					telefonos[posicion] = { TelefonoMovil(marcaDeArchivo, modeloDeArchivo, precioDeArchivo, inventarioDeArchivo) };
				}

				//Condición que determina si se llego al final del archivo y si se pudo leer.
				if (abrirContenido.eof())
				{
					//Nido de condiciones que determinan cual opcion se recibio.
					if (opcionRecibida == 2)
					{
						//Si se cumple la condicion cerramos el manejador del archivo y llamamos al método mostrar arreglo
						abrirContenido.close();
						guardarTelefonos(telefonos, posicion);
					}

					else if(opcionRecibida == 3)
					{
						//Si se cumple la condicion cerramos el manejador del archivo y llamamos al método mostrar arreglo
						abrirContenido.close();
						sumarInventario(telefonos, posicion);
					}

					else
					{
						//Si se cumple la condicion cerramos el manejador del archivo y llamamos al método mostrar arreglo
						abrirContenido.close();
						encontrarValorInventario_Marca_Modelo(telefonos, posicion);
					}
				}

				else
				{
					throw "No se pudo leer el archivo.";
				}
			}

			else
			{
				throw "No existe un archivo con ese nombre.";
			}
		}
	}
	catch (const char* e)
	{
		std::cerr << e << std::endl;
	}

	//Devolvemos el valor de la variabla terminoArreglo.
	return terminoArreglo;

}

/*
  El objetivo de esta estructura es almacenar y organizar las propiedades de los telefonos en la variables para comporarlas con las lineas de texto del archivo.
  La pre condicon es que sean utilizadas en diferentes funciones atraves del menu y la post condicion es que si no se utiliza esta estructura para declar variables tipo Telefono
  no se pordran mostrar las propiedades de los dispositivos o no se podran comparar la agragar o quitar del inventario.
*/
struct Telefono {
	std::string marca;
	std::string modelo;
	double precio;
	int cantidad;
};


//Esta funcion compara las propiedades de los telefonos mediante a b para poder comparar las lienas de texto del archivo y poder organizarlas alfabeticamente.
bool compararPorMarcaModelo(const Telefono& a, const Telefono& b) {
	if (a.marca == b.marca) {
		return a.modelo < b.modelo;
	}
	return a.marca < b.marca;
}
/*Creamos la función "main" El objetivo de esta funcion es mantener el programa funcionando*/
 
int main()
{
	//Creamos la variables necesarias necesarias de la funcion "main".
	bool salir = false,
		opcion1Previa =  false,
		noOpcion1Previa = false;
	int opcion, cantidad;
	std::string nombreDelArchiivo;
	std::string marca, modelo, linea; //La variable marca y modelo almacenara las marcas y modelos puestos por el usuario
	bool encontrado = false; //Determina si el archivo fue encontrado
	double precio; //Indicara el precio de cada telefono
	

	//Ciclo do while para mostrar el menú de manera indefinida.
	do
	{
		//Imprimimos el menú y se le pide al usuario que entre su selecion.
		std::cout << "Escoja una de las siguientes opciones presionando el numero de la misma.\n"
			" 1. Cargar datos de archivo\n 2. Almacenar datos en el archivo\n 3. Valor de inventario\n"
			" 4. Valor de inventario para marca-modelo-particular\n 5. Mostrar cantidad disponible para marca-modelo-particular\n"
			" 6. Anadir a inventario\n 7. Vender telefono\n 8. Mostrar inventario en orden alfabetico\n 0. Salir" << std::endl;
		std::cout << "Su opcion: ";
		std::cin >> opcion;

		//Estructura switch para manejar el menu.
		switch (opcion)
		{
		case 1://Caso por si selecciona la opción 1.
			
			std::cout << "Entre el nombre del archivo que desea abrir: ";
			std::cin >> nombreDelArchiivo;
			opcion1Previa = crearArreglo(nombreDelArchiivo, noOpcion1Previa, opcion);
			break;
		case 2://Caso por si selecciona la opcion 2.

			//Condición que determina si se habia seleccionado la opcion1 anteriormente. De lo contrario se lo notifica al usuario.
			if (opcion1Previa == true)
			{
				crearArreglo(nombreDelArchiivo, opcion1Previa, opcion);
			}

			else
			{
				std::cout << "Primero debes seleccionar un archivo para poder guardar. Intente otra vez." << std::endl;
				
			}
			break;

		case 3://Caso por si seleccionala opcion 3
			//Condición que determina si se habia seleccionado la opcion1 anteriormente. De lo contrario se lo notifica al usuario.
			if (opcion1Previa == true)
			{
				crearArreglo(nombreDelArchiivo, opcion1Previa, opcion);
			}

			else
			{
				std::cout << "Primero debes seleccionar un archivo para poder guardar. Intente otra vez." << std::endl;

			}
			break;

		case 4://Caso por si selecciona la opcion 4

			//Condición que determina si se habia seleccionado la opcion1 anteriormente. De lo contrario se lo notifica al usuario.
			if (opcion1Previa == true)
			{
				crearArreglo(nombreDelArchiivo, opcion1Previa, opcion);
			}

			else
			{
				std::cout << "Primero debes seleccionar un archivo para poder guardar. Intente otra vez." << std::endl;

			}
			break;

		case 5:
			/*
				El objetivo de esta funcion es que el usuario pueda ingresar la marca y el modelo del telefono para buscar la cantidad que hay disponible
				en inventario o en el archivo de inventario llamado Telefonos.txt tiene como pre-condicion que el usuario ponga un modelo y marca de telefono
				que exista en inventario si no se ejecuta la post-condicion la cual es que el telefono no encuentra.
			*/
		{
			//Input del telefono a buscar
			std::cout << std::endl;
			std::cout << "Ingrese la marca del teléfono: ";
			std::cin >> marca; //Almacena el input
			std::cout << "Ingrese el modelo del teléfono: ";
			std::cin >> modelo;//Almacena el input

			std::ifstream archivo(nombreDelArchiivo); //Carga el archivo en esta funcion
			if (archivo.is_open()) { //Se utiliza para ver si el archivo se abrio correctamente
				while (getline(archivo, linea)) { //Recoge las lienas del archivo

					//Si la marca es correcta se busca en el inventario la marca indicada por el usuario
					if (linea == marca) {
						getline(archivo, linea); //Lee las lineas de texto del archivo
						if (linea == modelo) {   //Si el modelo es correcto se busca en el inventario el modelo indicado por el usuario

							//Busca en inventario la cantidad disponible para esa marca y modelo de telefono
							getline(archivo, linea);
							getline(archivo, linea);

							//Almacena la cantidad en inventario del telefono buscado 
							cantidad = stoi(linea);

							//Out put que indica la cantidad disponible en inventario para ese telefono y si el telefono se encontro
							std::cout << "Cantidad disponible para " << marca << " " << modelo << " es: " << cantidad << std::endl;
							std::cout << std::endl;
							encontrado = true;
							break;
						}
					}
				}
				archivo.close();
			}//Si el telefono no se encontro le indica al usuario un post-condicion de error
			if (!encontrado) {
				std::cout << "El teléfono no se encuentra en inventario.\n" << std::endl;
			}
			break;//Termina el case
		}
		case 6:
		{
			/*
				El objetivo de esta funcion es que el usuario pueda ingresar la marca, el modelo y la cantidad del telefono para agregar a la cantidad que hay disponible
				en inventario dispositivo seleccionado en el archivo de inventario llamado Telefonos.txt tiene como pre-condicion que el usuario ponga un modelo y marca de telefono
				que exista en inventario para agregar la cantidad actualizada a es telefono en espesifico, si no se ejecuta la post-condicion la cual es que el telefono no encuentra
				y en ese caso se ele indicara al usuario que el dispositivo no existe y que ponga el precio para añadir un dispositivo nueva al inventario.

				Nota: Esta parte del proyecto le tocaba Dylan Gattis Wyche. 
			*/
			std::map<std::string, Telefono> inventario; // Mapa creado para almacenar los datos nuevos al inventario

			// Leectura de archivo
			std::ifstream archivoInventario(nombreDelArchiivo);
			if (archivoInventario.is_open()) {
				while (std::getline(archivoInventario, marca) && std::getline(archivoInventario, modelo) && archivoInventario >> precio >> cantidad) //Recoge las lienas del archivo
				{
					//Objeto Telefono para comparar los datos
					Telefono telefono;
					telefono.marca = marca;
					telefono.modelo = modelo;
					telefono.precio = precio;
					telefono.cantidad = cantidad;

					// Comprobar si la marca y el modelo ya existen en el inventario
					std::string existencia = marca + " " + modelo;
					if (inventario.find(existencia) != inventario.end()) {
						// Si existen, sumar la cantidad leída al valor previo
						inventario[existencia].cantidad += cantidad;
					}
					else {
						// Si no existen, agregar un nuevo teléfono al inventario
						inventario[existencia] = telefono;
					}

					// Leer la línea en blanco después de los datos de cantidad
					std::string lineaVacia;
					std::getline(archivoInventario, lineaVacia);
				}

				archivoInventario.close();
			}
			else {
				std::cerr << "No se pudo abrir el archivo para la lectura." << std::endl;
				return 1; // Salir con un código de error
			}

			// Solicitar la entrada de nuevos teléfonos al inventario
			while (true) {
				// Solicitar la marca del teléfono
				std::cout << std::endl;
				std::cout << "Ingrese la marca del telefono: ";
				std::cin >> marca;

				// Solicitar el modelo del teléfono
				std::cout << "Ingrese el modelo del telefono: ";
				std::cin >> modelo;

				// Solicitar la cantidad de teléfonos a agregar al inventario
				std::cout << "Ingrese la cantidad de telefonos a agregar al inventario: ";
				std::cin >> cantidad;

				// Comprobar si la marca y el modelo ya existen en el inventario
				std::string existencia = marca + " " + modelo;
				if (inventario.find(existencia) != inventario.end()) {
					// Si existen, sumar la cantidad adicional a la cantidad previa
					inventario[existencia].cantidad += cantidad;
					break;
				}
				else {
					
					// Solicitar el precio del teléfono
					std::cout << "El telefono no existe, se creara uno nuevo.\n";
					std::cout << "Ingrese el precio del telefono: ";
					std::cin >> precio;
					
					// Si no existen, agregar un nuevo teléfono al inventario
					Telefono telefonoNuevo;
					telefonoNuevo.marca = marca;
					telefonoNuevo.modelo = modelo;
					telefonoNuevo.precio = precio;
					telefonoNuevo.cantidad = cantidad;
					inventario[existencia] = telefonoNuevo;

					break;
				}
			}

			// Actualizar el archivo "Telefonos.txt" con el inventario actualizado
			std::ofstream archivoActualizado(nombreDelArchiivo);
			if (archivoActualizado.is_open()) {
				for (const auto& par : inventario) {
					archivoActualizado 
						<< par.second.marca << std::endl
						<< par.second.modelo << std::endl
						<< par.second.precio << std::endl
						<< par.second.cantidad << std::endl;
				}

				archivoActualizado.close();
				std::cout << "Se ha actualizado el stock del dispositivo selecionado con "<< cantidad <<" unidades nuevas."<< std::endl;
				std::cout << std::endl;
			}
			else {
				std::cout << "No se pudo abrir el archivo" << std::endl;
				break; // Salir con un código de error
			}

			break;
		}

		case 7:
		{
			/*
				El objetivo de esta funcion es que el usuario pueda ingresar la marca y el modelo y si el telefono se encuentra la cantidad se le restara 1 indicando que se vendido un telefono
				del inventario la pre condicion de la funcion es que el usuario pueda comprar un telefono si el telefono se encuentra en inventario y tiene una cantidad mayor a 0 la post condicion
				seria que si el telefono tiene una cantidad de 0 le indicara al usuario que no hay unidades disponibles para vender.
		
				Nota: Esta parte del proyecto le tocaba Dylan Gattis Wyche.
			*/
			std::ifstream archivoInventario(nombreDelArchiivo); //Abre el archivo
			std::vector<Telefono> inventario;

			if (!archivoInventario.is_open()) { //Si el archivo no se habre dara este errorww
				std::cerr << "Error al abrir el archivo." << std::endl;
				return 1;
			}

			while (std::getline(archivoInventario, marca) && std::getline(archivoInventario, modelo) && archivoInventario >> precio >> cantidad) //Leectura del archivo
			{
				//Devuele los datos del telefono si existen q
				Telefono telefono; 
				telefono.marca = marca;
				telefono.modelo = modelo;
				telefono.precio = precio;
				telefono.cantidad = cantidad;
				inventario.push_back(telefono);

				// Descartar lineas en blanco del ducumento.
				archivoInventario.ignore();
			}

			archivoInventario.close();//Cerrar archivo

			// Le pide a los usuario que ponga la marca y el modelo que estan buscando
			std::string marcaBuscada, modeloBuscado;
			std::cout << std::endl;
			std::cout << "Ingrese la marca del dispositivo: ";
			std::cin >> marcaBuscada;
			std::cout << "Ingrese el modelo del dispositivo: ";
			std::cin >> modeloBuscado;

		   encontrado = false;

			for (Telefono& telefono : inventario) {
				if (telefono.marca == marcaBuscada && telefono.modelo == modeloBuscado) { //Compara las marca indicadas por el usuario con los que estan en inventario 
					encontrado = true;
					//Out put del dispositivo encontrado
					std::cout << std::endl;
					std::cout << "--Propiedades del dispositivo--" << std::endl;
					std::cout << "Marca: " << telefono.marca << std::endl;
					std::cout << "Modelo: " << telefono.modelo << std::endl;
					std::cout << "Cantidad en inventario: " << telefono.cantidad << std::endl;

					if (telefono.cantidad > 0) {
						// Si hay stock del dispositivo buscado resta uno a la cantidad en inventario.
						telefono.cantidad--;
						std::cout << "Una unidad vendida. Quedan " << telefono.cantidad << " unidades en inventario." << std::endl;
						std::cout << std::endl;
					}
					else {
						std::cout << "No hay unidades disponibles en inventario." << std::endl;
						std::cout << std::endl;
					}
					
				}
			}

			if (!encontrado) {
				std::cout << "El telefono no se encuentra en inventario.\n" << std::endl;
			}

			// Actualizar los datos en el archivo cargado
			std::ofstream archivoActualizado(nombreDelArchiivo);

			if (!archivoActualizado.is_open()) { //Si el archivo no se cargo correctamente dara este error.
				std::cout << "Archivo incorrecto." << std::endl;
				break;
			}
			//Si el archivo cargo correctamente se actualizara con la compra realizada 
			for (const Telefono& telefono : inventario) {
				archivoActualizado << telefono.marca << std::endl
					<< telefono.modelo << std::endl
					<< telefono.precio << std::endl
					<< telefono.cantidad << std::endl;
			}

			archivoActualizado.close();

			break;
		}

		case 8:
		{
			/*
				El objetivo de esta funcion es que el usuario pueda ver el inventario en orden alfabético de la marca y modelo de telefono
				al precionar esta opcion. La pre-condicon de esta funcion es que el archivo tiene que cargarse correctamente para mostrar el
				inventario en de forma alfabetica. La post condicion de esta funcion es que si no se encuentra el archivo va a indacarle al
				al usuario que el archivo es incorrecto.
			*/

			std::ifstream archivo(nombreDelArchiivo); //Lee el archivo cargado
			std::vector<Telefono> telefonos; //Creacion de vector para almacenar variables tipo TelefonosABC
			encontrado = false; //Variable que va a indicar si el archivo fue encontrado o no

			if (archivo.is_open()) { //Verifica si esta abierto el archivo de forma correcta
				while (true) {
					Telefono telefono; //Declara una variable tipo TelefonoABC
					if (!getline(archivo, telefono.marca)) break; //Intenta leer la  marca del teléfono desde el archivo, si falla muestra la post condicion
					getline(archivo, telefono.modelo); //Lee el modelo del telefono desde el archvio
					archivo >> telefono.precio; //Lee el precio del telefono desde el archvio
					archivo >> telefono.cantidad; //Lee el cantidad del telefono desde el archvio
					archivo.ignore();  // Ignora el carácter de nueva línea

					telefonos.push_back(telefono); //Agrega el objeto al vector telefonos de la estructura Telefono
				}
				archivo.close();
			}

			// Ordenar el vector de teléfonos alfabéticamente por marca y modelo
			std::sort(telefonos.begin(), telefonos.end(), compararPorMarcaModelo);

			// Mostrar los teléfonos ordenados alfabeticamente
			std::cout << "Telefonos en orden alfabetico por marca y modelo:" << std::endl;
			for (const Telefono& telefono : telefonos) {
				std::cout << std::endl;
				std::cout << "Marca: " << telefono.marca << std::endl;
				std::cout << "Modelo: " << telefono.modelo << std::endl;
				std::cout << "Precio: " << telefono.precio << std::endl;
				std::cout << "Cantidad: " << telefono.cantidad << std::endl;
				encontrado = true;
				std::cout << std::endl;
			}
			if (!encontrado) {
				std::cout << "El archivo es incorrecto!!.\n" << std::endl;
			}
			break;//Termina el case
		}

		case 0:
		{
			/*
			El objetivo de esta funcion es que el usuario pueda salir del programa al precionar la opcion 0 del menu. La pre condicion es que al usuario precionar la opcion
			0 pueda salir del programa y la post condicion es que el programa deje de ejecutarse y el usuario pueda precionar cualquier letra para terminar la seccion.
			*/
			std::cout << "Has terminado de ejecutar el programa\n"; //Out put que indica que terminaste de usar el programa.
			return 0;//Termina la ejecucion
		}

		default:
			std::cout << "Elija otra vez." << std::endl;
			break;
		}
	} while (salir != true);

	return 0;
}