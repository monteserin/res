import { Row, Col } from "antd";
import { Link } from "react-router-dom";
import { Container } from "./styled";

function Menu() {
  return (
    <Container>
      <h1>Ejercicios</h1>
      <Row>
        <Col span={8}>
          <h2>useRef</h2>
          <ul>
            <li>
              <Link to="/theoryUseref">Teoría</Link>
            </li>
            <li>
              <Link to="/dollarsUseref">Ejercicio dollars</Link>
            </li>
            <li>
              <Link to="/formUseref">Ejercicio form</Link>
            </li>
            <li>
              <Link to="/gradesUseref">Ejercicio grades</Link>
            </li>
            <li>
              <Link to="/rectangleUseref">Ejercicio rectangle</Link>
            </li>
          </ul>
          <h2>useState</h2>
          <ul>
            <li>
              Recogida de datos con useState
              <ul>
                <li>
                  <Link to="/estados">Teoría estados</Link>
                </li>
                <li>
                  <Link to="/changeImageUseState">Ejercicio changeImage</Link>
                </li>
                <li>
                  <Link to="/changeValueOnClickUseState">
                    Ejercicio changeValueOnClick
                  </Link>
                </li>

                <li>
                  <Link to="/incrementUSeState">Ejercicio increment</Link>
                </li>
                <li>
                  Sin Botón
                  <ul>
                    <li>
                      <Link to="/dollarsSinBtnUseState">Ejercicio dollars</Link>
                    </li>
                    <li>
                      <Link to="/gradesSinBtnUseState">Ejercicio grades</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  Con Botón
                  <ul>
                    <li>
                      <Link to="/rectangleUseState">
                        Ejercicio rectangleUseState
                      </Link>
                    </li>
                    <li>
                      <Link to="/dollarsUseState">Ejercicio dollars</Link>
                    </li>
                    <li>
                      <Link to="/gradesUseState">Ejercicio grades</Link>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              Recogida de datos con useRef
              <ul>
                <li>
                  <Link to="/dollarsUseStateUseRef">
                    Ejercicio dollars con useState y useRef
                  </Link>
                </li>
                <li>
                  <Link to="/gradesUseStateUseRef">
                    Ejercicio grades con useState y useRef
                  </Link>
                </li>
                <li>
                  <Link to="/rectangleUseStateUseRef">
                    Ejercicio rectangle con useState y useRef
                  </Link>
                </li>
              </ul>
            </li>
          </ul>

          <h2>Ejercicios con estilos y styled-components</h2>

          <ul>
            <li>
              <Link to="/exStyles">Ejercicio estilos</Link>
            </li>
            <li>
              <Link to="/exStyledComponents1">
                Ejercicio styled-components 1
              </Link>
            </li>
            <li>
              <Link to="/exStyledComponents2">
                Ejercicio styled-components 2
              </Link>
            </li>
            <li>
              <Link to="/exStyledComponents3">
                Ejercicio styled-components 3
              </Link>
            </li>
          </ul>
        </Col>
        <Col span={8}>
          <h2>Components</h2>
          <ul>
            <li>
              <Link to="/3components">Tres componentess</Link>
            </li>

            {/* <li><Link to='/dollarsComponents'>Ejercicio dollars</Link></li>
          <li><Link to='/gradesComponents'>Ejercicio grades</Link></li>
          <li><Link to='/rectangleComponents'>Ejercicio Rectángulo</Link></li> */}
          </ul>
          <h2>Props</h2>
          <ul>
            <li>
              <Link to="/childrenProps">Ejercicio children</Link>
            </li>
            <li>
              <Link to="/books">Ejercicio books</Link>
            </li>
            <li>
              <Link to="/propsDelHijoAlPadre">
                Ejercicio props del hijo al padre
              </Link>
            </li>
            <li>
              <Link to="/ejercicioPropsDelHijoAlPadre">
                Ejercicio props del hijo al padre 1
              </Link>
            </li>
            <li>
              <Link to="/ejercicioPropsDelHijoAlPadre2">
                Ejercicio props del hijo al padre 2
              </Link>
            </li>
          </ul>
          <h2>Renderizado condicional</h2>
          <ul>
            <li>
              <Link to="/sinTernario">Sin ternario</Link>
            </li>

            <li>
              <Link to="/conTernario">Con ternario</Link>
            </li>
          </ul>

          <h2>Redux</h2>
          <ul>
            <li>
              <Link to="/eurosDolaresRedux">Ejercicio Euros a dólares</Link>
            </li>
            <li>
              <Link to="/foundationsRedux">Foundation</Link>
            </li>
            <li>
              <Link to="/gradesRedux">Ejercicio Grades</Link>
            </li>
            <li>
              <Link to="/listadoRedux">Ejercicio listado</Link>
            </li>
            <li>
              <Link to="/listadoPersonasRedux">Ejercicio listado personas</Link>
            </li>
            <li>
              <Link to="/rectangleRedux">Ejercicio rectangle</Link>
            </li>
          </ul>

          <h2>Otros</h2>
          <ul>
            <li>
              <Link to="/theatreTexts">Ejercicio TheatreTexts</Link>
            </li>
            <li>
              <Link to="/trivial">Ejercicio Trivial</Link>
            </li>
            <li>
              <Link to="/tableGame">Ejercicio Table Game</Link>
            </li>
            <li>
              <Link to="/tableGame2">Ejercicio Table Game 2</Link>
            </li>
            <li>
              <Link to="/sportsTraining">Ejercicio Sports Training</Link>
            </li>
            <li>
              <Link to="/parejas">Ejercicio Parejas</Link>
            </li>
            <li>
              <Link to="/layout">Ejercicio layout</Link>
            </li>

            <li>
              <Link to="/reactRouter">Ejercicio React Router</Link>
            </li>
            <li>
              <Link to="/layout">Ejercicio Layout</Link>
            </li>

            <li>
              <Link to="/contextApi">Ejercicio Context Api</Link>
            </li>
            <li>
              <Link to="/antjs">AntJS</Link>
            </li>
            <li>
              <Link to="/cuento">Cuento</Link>
            </li>
            <li>
              <Link to="/presu">Presu</Link>
            </li>
            <li>
              <Link to="/dollarsWithStyles">Dollars with styles</Link>
            </li>
            <li>
              <Link to="/auth0">Auth0</Link>
            </li>
            <li>
              <Link to="/falacias">Falacias</Link>
            </li>
          </ul>
        </Col>

        <Col span={8}>
          <h2>Fetch API con nodeJS</h2>
          <ul>
            <li>
              <Link to="/lista-invitados-nodejs">Lista invitados</Link>
            </li>
            <li>
              <Link to="/hospital-nodejs">Hospital</Link>
            </li>
            <li>
              <Link to="/mensajeria-nodejs">Mensajeria</Link>
            </li>
            <li>
              <Link to="/foro-nodejs">Foro</Link>
            </li>

            <li>
              <Link to="/futbol-equipos-nodejs">Futbol equipos</Link>
            </li>

            <li>
              <Link to="/futbol-equipos-calidades-nodejs">
                Calidades jugadores
              </Link>
            </li>
          </ul>

          <h2>Fetch API</h2>
          <ul>
            <li>
              <Link to="/chuck-norris-api">Ejercicio Chuck Norris Api</Link>
            </li>
            <li>
              <Link to="/chuck-norris-api-con-await">
                Ejercicio Chuck Norris Api con Await
              </Link>
            </li>
          </ul>
          <h2>Design</h2>
          <ul>
            <li>
              <Link to="/design-with-antd">Antd</Link>
            </li>
          </ul>
          <h2>Firebase</h2>
          <ul>
            <li>
              <Link to="/crud">Crud</Link>
            </li>
            <li>
              <Link to="/lista-invitados">Lista invitados</Link>
            </li>
            <li>
              <Link to="/tres-en-raya-multijugador">
                Tres en raya multijugador
              </Link>
            </li>
            <li>
              <Link to="/hospital">Hospital</Link>
            </li>
            <li>
              <Link to="/listado-libros">Listado libros</Link>
            </li>
            <li>
              <Link to="/tasklist">Tasklist</Link>
            </li>
            <li>
              <Link to="/mensajeria">Mensajería</Link>
            </li>
            <li>
              <Link to="/foro">Foro</Link>
            </li>
          </ul>
        </Col>
      </Row>
    </Container>
  );
}

export default Menu;
