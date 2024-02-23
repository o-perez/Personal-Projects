# Función para leer el archivo y guardar su informacion en una lista.
# Dicha funcion recibe el nombre del archivo y devuelve el reusltado
# en una lista a traves de un return.

def crearLista(archivoRecibidoLst):
    # Sección donde declaramos las variables para el funcionamiento de
    # la funcion.
    tomarContenido = open(archivoRecibidoLst, "r") #Abrimos el archivo.
    contador = 0 #Creammos un contador de tipo Entero.
    infoList = [] #Creamos la lista donde vamos a guardar los datos del archivo.
    contenido = tomarContenido.readlines() #Se usara para leer el contenido.
    totalDeLineas = tomarContenido.readlines() #Se usara para obtener el total de lineas del archivo.

    #Ciclo "for" para leer el archivo y quitarle la secuencia de escape "\n" a los datos.
    #Luego se guardaran en la lista ya creada.
    for totalDeLineas in contenido:
        contenido[contador] = totalDeLineas[:-1]
        infoList.append(contenido[contador])
        contador += 1 #Equivalente a contador = contador + 1.

    tomarContenido.close() #Cerramos el archivo.
    return infoList #Devolvemos la lista.

#Esta función esta a cargo de guardar nuevos datos en el archivo y no devuelve ningun valor.
#Esta se basa en la lectura de una lista creada al llamar la función de crearLista enviando el
#el nombre del archivo que esta recibe. El uso de esta lista recibida es leer el contenido del
#archivo y comparar si el nombre que se desea guardar ya existe en el archivo.

def insertarEnArchivo(archivoRecibidoInsrt):
#Se declaran las variables necesarias para el funcionamiento de la función.
    abrirParaMod = open(archivoRecibidoInsrt, "a")#Abrimos el archivo.
    buscarEnArchivo = [] #Creamos la lista donde vamos a guardar los datos de la lista recibida.
    contador4 = 0 #Creammos un contador de tipo Entero.


    buscarEnArchivo = crearLista(archivoRecibidoInsrt) #Guardamos la lista recibida
    buscarEnArchivoSize = int(len(buscarEnArchivo)) #Obtenemos el el tamaño de la lista.
    nombrePersonaNueva = input("Entre el nombre de la persona nueva: ") #Entramos el nombre de la persona.

    #Ciclo "for" para movernos en la lista y determinar si ya existe el nombre entrado.
    for contador4 in range(0, buscarEnArchivoSize, 1):
        #Condición que determina si el nombre existe en la lista recibida. De existir vuelve y pregunta el
        #nombre otra vez.
        if nombrePersonaNueva == buscarEnArchivo[contador4]:
            print("Ese nombre ya existe!")
            nombrePersonaNueva = input("Entre el nombre de la persona nueva: ")

    #Se ejecutan las siguientes instrucciones cuando la persona es nueva y se sale del ciclo "for".
    edadPersonaNueva = input("Entre la edad de la persona nueva: ")#Se pregunta la edad de la persona
    abrirParaMod.write(nombrePersonaNueva + "\n")# Escribe el nombre en el archivo.
    abrirParaMod.write(edadPersonaNueva + "\n")# Escribe la edad de la persona ene el archivo.
    abrirParaMod.close()# Se cierra el archivo.

#Función a cargo de imprimir el contenido del archivo utilizando una lista recibida.
#Esta se basa en la lectura de una lista creada al llamar la función de crearLista enviando el
#el nombre del archivo que esta recibe.

def imprimirArchivo(archivoRecibido):
    #Creamos la variables necesarias para el funcionamiento de la funcion.
    nombreEnDatos = "" #Variable de tipo string para guardar el nombre.
    edadEnDatos = "" #Variable de tipo string para guardar la edad.
    contador2 = 0 #Variable contador2 de tipo entero.
    contador3 = 1 #Variable ccntador3 de tipo entero.
    printLista = [] #Creamos la lista donde se va a copiar la otra lista.

    printLista = crearLista(archivoRecibido)#Guardamos la copia de la lista
    listZise = int(len(printLista)) #Obtenemos el tamaño de la lista.

    #Ciclo "for" para movernos por la lista e imprimir su contenido.
    for contador2 in range (0, listZise, 2):
        nombreEnDatos = printLista[contador2]
        edadEnDatos = printLista[contador3]
        print("{}  {}".format(nombreEnDatos, edadEnDatos))
        contador3 += 2 #Equivalente a contador3 = contador3 + 2.


import os  #Imporaticacion de os para definir si el archivo se cargo correctamente del sistema operativo  
def eliminar_persona(archivo, nombre, edad): #Funcion para eliminar persona o jugadores de la lista 
        #Validacion si el archivo existe antes de realizar la funcion
        if nombreDeArchivo == "": 
            print("Vuelva a intentarlo e ingrese un nombre de archivo")
        else:
            #Si existe abre el archivo en modo escritura 
            with open(archivo, 'r') as file: 
                lineas = file.readlines() #Borra todo el contenido del archvio cargado si la respuesta es 'si'
        #Abre el archivo en modo escritura para inicializar una variable para recorrer las lineas del archivo y valida si el dato se encuentra
        with open(archivo, 'w') as file:
            i = 0 #variable para recorrer las lineas del archivo
            dato_existe = False #alida si el dato se encuentra

            #Recorre las lineas del archivo
            while i < len(lineas):
                if nombre in lineas[i] and str(edad) in lineas[i + 1]:#Compara el nombre y edad puesta por el usuario con los datos del archivo
                    #Si los datos existen omite 2 lienas y marca dato_existe como cierto.
                    i += 2
                    dato_existe = True
                else:
                    #Si el dato no se encuentra escribe la lienas actual del archivo y avanza a la siguiente hasta encontrar el dato puesto por el usuario.
                    file.write(lineas[i])
                    i += 1
        #Si el la persona puesta por el usuario no existe le presentara que no existe esa persona de lo contrario le presenta que se borro exitosamente.
        if not dato_existe: 
            print(f"{nombre} con edad {edad} no se encuentra en la lista.\n")
        else: 
            print(f"{nombre} con edad {edad} se borro exitosamente de la lista.\n")           

def borrar_contenido(archivo):
        confrimar = input("¿Estas seguro que quieres eliminar todo el contenido? si/no \n")  #Valida si el usuario quiere borrar el contenido verdaderamente
        #Si la respuesta es si se borrar totdo el contenido
        if confrimar == 'si': 
            with open(archivo, 'w') as file: #Abre el archivo cargado por el usuario en modo escritura 
                file.truncate() #Borra todo el contenido del archivo cargadp
                print(f"Se ha borrado el contenido completo del archivo {archivo}.")
        #Si la respues es no el contenido del archivo no se borrara 
        elif confrimar == 'no': 
            print("No se a realizado ningun cambio en el archivo")
        else:
             print("Por favor indique si o no,vuelva a intentarlo")

# El main de nuestro programa.

#Se declaran las varibles necesarias para el funcionamiento del programa.
salir = False #Variable de tipo booleana para determinar si salimos del programa.
opcion = 0 #Variable para guardar el valor entrado por el usuario.
nombreDeArchivo = "" #Guardamos el nombre del archivo.
archivo = nombreDeArchivo #Variable para guardar el archivo cargado por el usuario para porder ser utilziado en las funciones
#Ciclo "while" que mantendra el programa activo salir no sea "True"
while salir == False:
    opcion = int(input("Seleccione una de las siguientes opciones:\n "
                       "1. Entrar el nombre de la lista con la que se trabajara\n "
                       "2. Mostrar el contenido de la lista\n 3. Insertar una nueva persona\n "
                       "4. Eliminar una persona de la lista\n 5. Borrar el contenido de la lista completa\n "
                       "9. Salir del programa\n Su opción es: ")) # Le mostramos la opciones al usuario
    #despues le pedimos que entre la que desee.
    #Conjunto de condiciones que determinan la opcion seleccionada y llaman a sus respectivas funciones.
    if opcion == 1:
        nombreDeArchivo = input("Entre el nombre del archivo: ")
        # abrirArchivos(nombreDeArchivo)
    elif opcion == 2:
        if nombreDeArchivo == "":
            print("Vuelva a intentarlo e ingrese un nombre de archivo")

        else:
            imprimirArchivo(nombreDeArchivo)

    elif opcion == 3:
        if nombreDeArchivo == "":
            print("Vuelva a intentarlo e ingrese un nombre de archivo")
        else:
            insertarEnArchivo(nombreDeArchivo)

    elif opcion == 4:
            #Verfica si el archivo cargado existe en el sistema operativo 
            if os.path.isfile(nombreDeArchivo):
                nombre = input("Ingresa el nombre de la persona que quiere eliminar de la lista: ") #variable con input para el nombre a borrar 
                edad = input("Ingresa la edad de la persona a eliminar: ") #variable con input para la edad a borrar 
                eliminar_persona(nombreDeArchivo,nombre,edad) #Llama la funcion para elimar el nombre y edad puesta por el usuario
            else:
                print("Vuelva a intentarlo e ingrese un nombre de archivo")

    elif opcion == 5:
        #Valida si el archivo cargado existe
        if nombreDeArchivo == "":
            print("Vuelva a intentarlo e ingrese un nombre de archivo")
        else:
            #Si existe llamada la funcion para borrar todo el contenido de ese archivo
            borrar_contenido(nombreDeArchivo)

    elif opcion == 9:
            #Si la opcion 9 es precionada se sale del programa y guarda los cambios
            print("Saliste del programa, operaciones guardadas")
            break
    else:
            #Si la opcion peusta por el usuario es incorrecta le mostrara este mensaje
            print("Opción no válida. Por favor, selecciona una opción válida.")