import { useEffect, useState } from "react";
import axios from 'axios';
import { createItem, getItems, deleteItem, updateItem } from "../app/api";

const InserccionProductos = () => {


    const salvarDatos = () => {
        axios.get('https://api.mercadolibre.com/sites/MLA/search?q=malabares').then(async res => {
            console.log('Se ejecuta el get');
            res.data.results.map(product => {
                console.log(product)
                createItem({ title: product.title, price: product.price, pictureUrl: product.thumbnail, stock: 70, categoryId: 1, description: product.title });
            })
        })

    }

    return (
        <div>


            <button onClick={salvarDatos}>Salvar datos</button>


        </div>
    );
}

export default InserccionProductos;
