import { useEffect, useState } from "react";
import axios from "axios";
import { useParams, useLocation } from "react-router-dom";
import { Row } from "../app/styles";
import responses from "../responses.json";
import { arraysEqual } from "../utlis";
import check from "../assets/check.png";
import hint from "../assets/hint.png";

const SqlBox = () => {
  const [sqlQuery, setSqlQuery] = useState("");
  const [solutions, setSolutions] = useState([]);
  const [dataTable, setDataTable] = useState([]);
  // const { id } = useParams();
  const query = new URLSearchParams(useLocation().search);
  const id = query.get("id");

  const responsesGroup = responses[id];
  useEffect(() => {
    axios
      .get(
        `https://pablomonteserin.com/res/sql/app/php.php?sql=${encodeURIComponent(
          sqlQuery
        )}`,
        {
          query: sqlQuery,
        }
      )
      .then((res) => {
        console.log('El resultado de la consulta: ', res.data)
        if (res.data) {
          let anySolution = -1;
          responsesGroup.map((response, i) => {
            if (response.data !== "no") {
              setDataTable(res.data);
            }
            const result = arraysEqual(response.data, res.data);
            if (result === true) {
              anySolution = i;
              setSolutions([...solutions, anySolution]);
            }
          });
          // anySolution !== -1 && setSolutions([...solutions, anySolution]);
        } else {
        }
      });
  }, [sqlQuery]);

  const generateTable = (data) => {
    const headData = Object.keys(data[0]);
    const headCode = headData.map((key) => {
      return <th key={key}>{key}</th>;
    });
    const code = data.map((row) => {
      const keys = Object.keys(row);
      const tdJSX = keys.map((key, i) => {
        return <td key={row[key] + i}>{row[key]}</td>;
      });
      return <tr key={row.id}>{tdJSX}</tr>;
    });
    return (
      <table border="1px">
        {headCode}
        {code}
      </table>
    );
  };

  return (
    <div>
      <Row>
        <div>
          <textarea
            style={{ width: "100%", height: 200 }}
            onChange={(e) => setSqlQuery(e.target.value)}
            value={sqlQuery}
          >
            {sqlQuery}
          </textarea>
          {dataTable?.length > 0 && generateTable(dataTable)}
        </div>
        <div>
          {responsesGroup?.map((r, i) => (
            <p
              key={r.question}
              style={{ display: "flex", alignItems: "center" }}
            >
              {
                // solutions es un array que contiene los indices de las respuestas correctas
              }
              {solutions.includes(i) && (
                <img src={check} style={{ marginRight: 10 }} />
              )}
              {r.question}{" "}
              <img
                src={hint}
                style={{ width: 25, cursor: "pointer" }}
                onClick={() => {
                  setSqlQuery(sqlQuery + r.sql);
                }}
              />
            </p>
          ))}
        </div>
      </Row>
    </div>
  );
};

export default SqlBox;
