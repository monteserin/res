import MiComponente from './components/MiComponente';

function App() {
  const changePadre = (param) => {
    alert(param);
  };
  return (
    <div>
      <MiComponente onSomeEvent={changePadre} />
    </div>
  );
}

export default App;
