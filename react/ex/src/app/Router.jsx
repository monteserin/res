import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "../home/Menu";
// useRef
import Theory_useRef from "../exercises/useRef/teoria/src/App";
import Dollars_useRef from "../exercises/useRef/dollars/src/App";
import Form_useRef from "../exercises/useRef/form/src/App";
import Grades_useRef from "../exercises/useRef/grades/src/App";
import Rectangle_useRef from "../exercises/useRef/rectangle/src/App";

// useState
import ChangeImage_useState from "../exercises/useState/recogida-datos-con-estado/changeImage/src/App";
import ChangeValueOnClick_useState from "../exercises/useState/recogida-datos-con-estado/changeValueOnClick/src/App";
import Dollars_useState from "../exercises/useState/recogida-datos-con-estado/conBtn/dollars/src/App";
import DollarsSinBtn_useState from "../exercises/useState/recogida-datos-con-estado/sinBtn/dollars/src/App";
import Grades_useState from "../exercises/useState/recogida-datos-con-estado/conBtn/grades/src/App";
import GradesSinBtn_useState from "../exercises/useState/recogida-datos-con-estado/sinBtn/grades/src/App";
import Rectangle_useState from "../exercises/useState/recogida-datos-con-estado/conBtn/rectangle/src/App";
import Increment_useState from "../exercises/useState/recogida-datos-con-estado/increment/src/App";
import Estados from "../exercises/useState/recogida-datos-con-estado/teoria/src/App";

// useState con useRef
import Dollars_useState_useRef from "../exercises/useState/recogida-datos-con-useRef/dollars/src/App";
import Grades_useState_useRef from "../exercises/useState/recogida-datos-con-useRef/grades/src/App";
import Rectangle_useState_useRef from "../exercises/useState/recogida-datos-con-useRef/rectangle/src/App";
import ExStyles from "../exercises/styles/styles/src/App";
import ExStyledComponent1 from "../exercises/styles/styled-components-1/src/App";
import ExStyledComponent2 from "../exercises/styles/styled-components-2/src/App";
import ExStyledComponent3 from "../exercises/styles/styled-components-3/src/App";

// components

// props
import Children_props from "../exercises/props/children/src/App";
import BooksProps from "../exercises/props/read-json/src/App";

import PropsDelHijoAlPadre_props from "../exercises/props/props-del-hijo-al-padre/src/App";
import EjercicioPropsDelHijoAlPadre from "../exercises/props/props-hijo-al-padre-ejercicio-1/src/App";
import EjercicioPropsDelHijoAlPadre2 from "../exercises/props/props-hijo-al-padre-ejercicio-2/src/App";

// renderizado condicional
// import DollarsGradesRectangle from '../exercises/conditionalRender/dollars-grades-rectangle/src/App';
// import CosteHotelConditionalRender from '../exercises/conditionalRender/coste-hotel/src/App';

// miscelanea

import TheatreTexts from "../exercises/miscelanea/theaterTexts/src/App";
import Trivial from "../exercises/miscelanea/trivial/src/App";
import TableGame from "../exercises/miscelanea/tableGame/src/App";
import TableGame2 from "../exercises/miscelanea/tablegame2/src/App";

import SportsTraining from "../exercises/miscelanea/sportsTraining/src/App";
import Parejas from "../exercises/miscelanea/parejas/src/App";

import ReactRouter from "../exercises/miscelanea/reactRouter/src/App";
import Layout from "../exercises/miscelanea/layout/src/App";

import ChuckNorrisApi from "../exercises/fetchAPI/chuckNorrisApi/src/App";
import ChuckNorrisApiConAwait from "../exercises/fetchAPI/chuckNorrisApiConAwait/src/App";

import Falacias from "../exercises/miscelanea/falacias/src/App";

import ContextApi from "../exercises/miscelanea/contextApi/src/App";
import AntJS from "../exercises/miscelanea/antjs/src/App";
import Cuento from "../exercises/miscelanea/cuento/src/App";
import Presu from "../exercises/miscelanea/presu/src/App4";

// antd
import DesignWithAntd from "../exercises/design/ex-with-antd/src/AppWrapper";
// Firebase
import FirebaseCrud from "../exercises/firebase/firebase-crud/src/App";
import Hospital from "../exercises/firebase/hospital/src/App";
import ListadoLibros from "../exercises/firebase/listado-libros/src/App";
import ListaInvitados from "../exercises/firebase/lista-invitados/src/App";
import TresEnRayaConMultijugador from "../exercises/firebase/tres-en-raya-multijugador/src";

import TaskList from "../exercises/firebase/tasklist/src";
import Mensajeria from "../exercises/firebase/mensajeria/src/App";
import Foro from "../exercises/firebase/foro/src/App";

import DollarsWithStyles from "../exercises/miscelanea/dollars-with-styles/src/App";

// redux
import EurosADolaresRedux from "../exercises/redux/dollars/src/App";
import FoundationsRedux from "../exercises/redux/foundations/src/App";
import GradesRedux from "../exercises/redux/grades/src/App";
import ListadoRedux from "../exercises/redux/listado/src/App";
import ListadoPersonasRedux from "../exercises/redux/listadoPersonas/src/App";
import RectangleRedux from "../exercises/redux/rectangle/src/App";

import ListaInvitadosNodeJS from "../exercises/fetch-api-con-nodejs/lista-invitados/src/App";
import FutbolEquiposNodeJS from "../exercises/fetch-api-con-nodejs/futbol-equipos/src/App";
import CalidadesJugadores from "../exercises/fetch-api-con-nodejs/calidades-jugadores/src/App";

import HospitalNodeJS from "../exercises/fetch-api-con-nodejs/hospital/src/App";
import MensajeriaNodeJS from "../exercises/fetch-api-con-nodejs/mensajeria/src/App";
import ForoNodeJS from "../exercises/fetch-api-con-nodejs/foro/src/App";

import ConTernario from "../exercises/conditionalRender/con-ternario/src/App";
import SinTernario from "../exercises/conditionalRender/sin-ternario/src/App";
import ThreeComponents from "../exercises/components/ThreeComponents/src/App";

function Router() {
  return (
    <BrowserRouter basename={import.meta.env.VITE_PUBLIC_URL}>
      <Routes>
        <Route>
          <Route index element={<Home />} />
          <Route path="theoryUseref" element={<Theory_useRef />} />
          <Route path="dollarsUseref" element={<Dollars_useRef />} />
          <Route path="formUseref" element={<Form_useRef />} />
          <Route path="gradesUseref" element={<Grades_useRef />} />
          <Route path="rectangleUseref" element={<Rectangle_useRef />} />
          <Route
            path="changeImageUseState"
            element={<ChangeImage_useState />}
          />
          <Route
            path="changeValueOnClickUseState"
            element={<ChangeValueOnClick_useState />}
          />
          <Route path="dollarsUseState" element={<Dollars_useState />} />
          <Route
            path="dollarsSinBtnUseState"
            element={<DollarsSinBtn_useState />}
          />
          <Route path="gradesUseState" element={<Grades_useState />} />
          <Route
            path="gradesSinBtnUseState"
            element={<GradesSinBtn_useState />}
          />
          <Route path="rectangleUseState" element={<Rectangle_useState />} />
          <Route path="incrementUSeState" element={<Increment_useState />} />
          <Route
            path="dollarsUseStateUseRef"
            element={<Dollars_useState_useRef />}
          />
          <Route
            path="gradesUseStateUseRef"
            element={<Grades_useState_useRef />}
          />
          <Route
            path="rectangleUseStateUseRef"
            element={<Rectangle_useState_useRef />}
          />
          <Route path="exStyles" element={<ExStyles />} />
          <Route path="exStyledComponents1" element={<ExStyledComponent1 />} />
          <Route path="exStyledComponents2" element={<ExStyledComponent2 />} />
          <Route path="exStyledComponents3" element={<ExStyledComponent3 />} />
          <Route path="estados" element={<Estados />} />
          <Route path="3components" element={<ThreeComponents />} />
          {/*
          <Route path="dollarsComponents" element={<Dollars_components />} />
          <Route path="gradesComponents" element={<Grades_components />} />
          <Route path="rectangleComponents" element={<Rectangle_components />} /> */}
          <Route path="childrenProps" element={<Children_props />} />
          <Route path="books" element={<BooksProps />} />
          <Route
            path="propsDelHijoAlPadre"
            element={<PropsDelHijoAlPadre_props />}
          />
          <Route
            path="ejercicioPropsDelHijoAlPadre"
            element={<EjercicioPropsDelHijoAlPadre />}
          />
          <Route
            path="ejercicioPropsDelHijoAlPadre2"
            element={<EjercicioPropsDelHijoAlPadre2 />}
          />
          <Route path="sinTernario" element={<SinTernario />} />
          <Route path="conTernario" element={<ConTernario />} />
          {/* <Route path="dollarsGradesRectangleConditionalRender" element={<DollarsGradesRectangle />} />
        <Route path="costeHotelConditionalRender" element={<CosteHotelConditionalRender />} /> */}
          <Route path="theatreTexts" element={<TheatreTexts />} />
          <Route path="trivial" element={<Trivial />} />
          <Route path="tableGame" element={<TableGame />} />
          <Route path="tableGame2" element={<TableGame2 />} />
          <Route path="sportsTraining" element={<SportsTraining />} />
          <Route path="parejas" element={<Parejas />} />
          <Route path="reactRouter/*" element={<ReactRouter />} />
          <Route path="layout/*" element={<Layout />} />
          <Route path="chuck-norris-api" element={<ChuckNorrisApi />} />
          <Route
            path="chuck-norris-api-con-await"
            element={<ChuckNorrisApiConAwait />}
          />
          <Route path="contextApi" element={<ContextApi />} />
          <Route path="eurosDolaresRedux" element={<EurosADolaresRedux />} />
          <Route path="foundationsRedux" element={<FoundationsRedux />} />
          <Route path="gradesRedux" element={<GradesRedux />} />
          <Route path="listadoRedux" element={<ListadoRedux />} />
          <Route
            path="listadoPersonasRedux"
            element={<ListadoPersonasRedux />}
          />
          <Route path="rectangleRedux" element={<RectangleRedux />} />
          <Route path="antjs" element={<AntJS />} />
          <Route path="cuento" element={<Cuento />} />
          <Route path="presu" element={<Presu />} />
          <Route path="dollarsWithStyles" element={<DollarsWithStyles />} />
          <Route path="falacias" element={<Falacias />} />
          <Route path="design-with-antd" element={<DesignWithAntd />} />
          <Route path="crud" element={<FirebaseCrud />} />
          <Route path="lista-invitados/*" element={<ListaInvitados />} />
          <Route
            path="tres-en-raya-multijugador/*"
            element={<TresEnRayaConMultijugador />}
          />

          <Route path="hospital/*" element={<Hospital />} />
          <Route path="listado-libros" element={<ListadoLibros />} />
          <Route path="tasklist/*" element={<TaskList />} />
          <Route path="mensajeria/*" element={<Mensajeria />} />
          <Route path="foro/*" element={<Foro />} />
          <Route
            path="lista-invitados-nodejs/*"
            element={<ListaInvitadosNodeJS />}
          />
          <Route path="hospital-nodejs/*" element={<HospitalNodeJS />} />
          <Route path="mensajeria-nodejs/*" element={<MensajeriaNodeJS />} />
          <Route path="foro-nodejs/*" element={<ForoNodeJS />} />
          <Route
            path="listado-libros-nodejs"
            element={<ListaInvitadosNodeJS />}
          />
          <Route
            path="futbol-equipos-nodejs/*"
            element={<FutbolEquiposNodeJS />}
          />
          <Route
            path="futbol-equipos-calidades-nodejs"
            element={<CalidadesJugadores />}
          />
          <Route path="*" element={() => <div>Outer 404</div>} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}
export default Router;
