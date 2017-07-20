# Ambiente visual para el aprendizaje de la lógica proposicional

## Proyecto ECI-Logic

Esta es una aplicación para el aprendizaje didáctico de la lógica proposicional.

Aplicación realizada como Proyecto de Grado de Ingeniería de Sistemas para la Escuela Colombiana de Ingeniería.

## Justificación

La tecnología se ha convertido en un instrumento primordial en la gestión creación de nuevos conocimientos. La enseñanza y el aprendizaje de la informática atraviesa por una coyuntura, en la cual se hace cada día más importante ponerse a tono, de una forma más interactiva y autónoma. La enseñanza y el aprendizaje de la lógica proposicional exigen nuevas formas para ser abordadas, de acuerdo con la actividad, la cultura científica y tecnológica en que están inmersos los estudiantes.

Generalmente la conceptualización de los temas de  lógica  (útil en la ingeniería) se traduce a los problemas clásicos que aparecen en los libros, lo que no permite la experimentación y la conjetura. Creemos que para abordar estos temas, es muy importante que el estudiante cuente con un laboratorio, o un entorno especializado, en el cual pueda descubrir, en forma dinámica y motivadora, los principios lógicos.

En el presente documento se pretende abordar la manera que se procedió para elaborar una serie de módulos prototipos funcionales, los cuales finalmente fueron fusionados en una sola aplicación, de modo que los componentes que interactúan por debajo actúen en forma integral.

## Objetivo general

El objetivo general del proyecto consiste principalmente en diseñar y construir un software con una interfaz de alto componente visual, basado en una metáfora lúdica, que le permita al estudiante el aprendizaje de los conceptos relacionados con la lógica proposicional de una forma más fácil y motivadora, proveyendo un espacio apto para la experimentación y conjetura.

Para alcanzar dicho objetivo, el proyecto necesita proveerle al usuario de herramientas, las cuales le brinden una interacción bastante rica, por medio del diseño de problemas y situaciones que promueva la experimentación, la conjetura y la disposición de un entorno práctico (o laboratorio), en donde se planteen y resuelvan problemas fuera de lo tradicional, de una manera diferente.

## Objetivos específicos

Para poder satisfacer el objetivo general descrito antes, se ha procedido a segmentarlo en objetivos más concretos, más tangibles, de modo que su implementación haya sido más satisfactoria.

* Estudiar las situaciones problemáticas relacionadas con la simbolización, bajo el marco de la lógica proposicional.
* Diseñar un ambiente de software, basado en una interfaz con alto componente visual, que permita una fácil interacción con los conceptos lógicos.
* Recopilar problemas de distintos estilos: retos, graficaciones, simbolización de enunciados y deducción lógica.
* Implementar e integrar un ambiente de Software, con alto componente visual, que permita una fácil interacción con los conceptos lógicos.

## Desarrollo de la propuesta

Con base en los objetivos previos, se procedió a diseñar una propuesta que los satisfaga. Dicha propuesta se dividió en tres módulos, los cuales funcionan en forma independiente, pero juntos prometen brindar una experiencia enriquecedora al estudiante. Dichos módulos son los siguientes:

### Módulo de conceptos

Este módulo tiene como finalidad el introducir, de una forma amena, al usuario al pequeño gran mundo de la lógica proposicional. Contiene varios términos y definiciones clave e importantes, los cuales le harán aterrizar y entender, de una mejor manera, al usuario los principios más básicos y primordiales que gobiernan la lógica proposicional.

![imagen](https://user-images.githubusercontent.com/14367140/28438615-5e52fd5a-6d64-11e7-8411-88a016b8d4b0.png)

Provee una descripción concisa pero bastante detallada de los fenómenos lógicos, desde las proposiciones y los valores de verdad hasta las reglas de inferencia y la simbolización.

![imagen](https://user-images.githubusercontent.com/14367140/28438702-abfd2486-6d64-11e7-84a8-fb31f8ce22f7.png)

### Módulo de evaluación

Este módulo tiene varias actividades, por medio de las cuales se le pretende brindar al estudiante un conjunto de herramientas con las que pueda ser capaz de experimentar y aprender por su propia cuenta, de una forma muy visual. Este módulo se compone más concretamente de una calculadora lógica, de un ayudante de simbolizaciones y demostraciones, y de un graficador poderoso de árboles sintácticos.

![imagen](https://user-images.githubusercontent.com/14367140/28439440-8f52068c-6d67-11e7-8935-e57fbb84207d.png)

A continuación veremos más en detalle cada una de las actividades mencionadas antes, que componen este módulo.

#### Calculadora lógica

Esta calculadora especial le permite al usuario experimentar con los valores y comportamientos de la semántica de fórmulas, es decir de los valores de verdad de situaciones concretas representadas y simbolizadas en fórmulas lógicas, útiles en la solución de problemas más complejos.

![imagen](https://user-images.githubusercontent.com/14367140/28438794-00d5ecf4-6d65-11e7-8504-1cb40752a683.png)

#### Simbolizar y deducir

Generalmente el poder interactuar con un escenario o caso de estudio, le permite al usuario el relacionar los diferentes elementos conceptuales que integran y dan sentido al aprendizaje de una forma más amena y entretenida. Para la lógica proposicional esto no es la excepción.

![imagen](https://user-images.githubusercontent.com/14367140/28438812-12036f1a-6d65-11e7-9448-464fa1f6ee0a.png)

Esta actividad en concreto le aporta al usuario algunas formas varias de interacción, como las siguientes:
* Documentar y guardar.
	* Planteamiento del enunciado.
	* Simbolización de proposiciones, premisas y conclusiones.
* Desarrollar y comprobar una deducción.
	* Uso de reglas de inferencia.
	* Documentación de las razones del uso de determinadas reglas de inferencia.
	* Sugerir conclusiones basadas en la aplicación de las reglas de inferencia.
* Definir un conjunto de reglas de inferencia.
	* Proponer y experimentar con un conjunto personalizado de reglas de inferencia.
	* Guardar y cargar en tiempo real otros conjuntos distintos de reglas de inferencia.

#### Árbol sintáctico

Le permite al usuario el poder experimentar visualmente con la estructura sintáctica y semántica de las fórmulas, lo que le ayuda a entender de una forma mejor y más simple qué aspectos hay que tener en cuenta a la hora de realizar el análisis sintáctico de expresiones de la lógica proposicional.

![imagen](https://user-images.githubusercontent.com/14367140/28438967-a26547fe-6d65-11e7-86a5-013b6c04feb2.png)

Esta representación visual se potencia en gran medida a los retos que se planteen durante el aprendizaje, por medio de la creación de diversos escenarios o casos de estudio propuestos por el profesor o los mismos estudiantes. Un elemento importante a tener en cuenta durante estos escenarios propuestos es que el estudiante puede plantearse a sí mismo preguntas tipo “*¿Qué pasaría si…?*”.

En este repositorio hay dos carpetas, las cuales corresponden a las dos versiones disponibles de la aplicación: una de escritorio, la cual se desarrolló en **PHP** bajo el Framework *Yii*; la otra se desarrolló en el lenguaje **Prolog**, por medio de la aplicación *Win-Prolog 6000*.

### Módulo de retos

Como se mencionó antes, este módulo posee algunas actividades interesantes que permitirán que el usuario se entretenga, al mismo tiempo que afianza sus conocimientos en la lógica proposicional. Estas actividades pretenden ser recreativas y altamente interactivas, al igual que incentiven el raciocinio, razón por la cual no necesariamente se resuelven en forma intuitiva.

![imagen](https://user-images.githubusercontent.com/14367140/28439003-c586120e-6d65-11e7-9eed-82d3be8d73e6.png)

A continuación veremos más en detalle cada uno de los retos que componen este módulo.

#### Encontrar el conector

Este reto consiste en encontrar el conector lógico que satisfaga la fórmula, conectando ambos fragmentos sueltos, de modo que la fórmula resultante sea tautológica, es decir que, sin importar el valor de verdad de cada una de las variables, la fórmula dé siempre verdadera.

![imagen](https://user-images.githubusercontent.com/14367140/28439062-fb2b311e-6d65-11e7-9e30-d3e964e838fa.png)

#### Trivial lógico

Este reto es la adaptación a la lógica proposicional de la mecánica principal de la aplicación móvil interactiva de preguntas y respuestas **Trivial**, con la diferencia de que aquí no influye el factor tiempo, es decir que uno puede tardar en una pregunta todo lo que se requiera para pensar en una posible solución.

![imagen](https://user-images.githubusercontent.com/14367140/28439152-54cd3276-6d66-11e7-83fc-b780d89c364f.png)

Aquí lo que se busca es poner a prueba los conocimientos teóricos que el usuario ha adquirido a lo largo de su viaje por el intrincado mundo de la lógica.

#### Puzzle lógico

Este reto pretende simular un rompecabezas, donde el usuario debe reconstruir la fórmula que aparece enunciada en la parte superior de la pantalla.

![imagen](https://user-images.githubusercontent.com/14367140/28439175-6df57696-6d66-11e7-9aca-cbe980f21e34.png)

Aquí el usuario puede desplazar las diferentes fichas con el clic del ratón, en forma horizontal, vertical o diagonal, haciendo todo lo posible por hacer coincidir la fórmula resultante con la mostrada arriba, en la menor cantidad de pasos posible.

### Consideraciones

La versión de Escritorio es la más completa de las dos. La parte Web únicamente dispone lo que sería la **calculadora lógica** y el reto de **encontrar el conector**.

Igual, si se quiere visualizar lo que sería el bosquejo de la aplicación Web, únicamente hay que seguir uno de los links (no se garantiza su disponibilidad permanente):
* http://proweb.is.escuelaing.edu.co/
* http://proweb.is.escuelaing.edu.co:8081/logica/
