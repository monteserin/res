import "./styles.css";
import img from "./assets/img.png";

function App() {
  return (
    <div>
      <div className="box" />

      <div style={{ width: 100, height: 100, backgroundColor: "green" }} />

      <img src={img} alt="" />
    </div>
  );
}

export default App;
