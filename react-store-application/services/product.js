import { fetchPersonal } from "../src/utils/request"

export const allProductsForCategory = async(category) =>{
  const request = await fetchPersonal(`/productos/${category}`);
  const {productos} = await request.json();
  return productos;
};

export const addProduct = async (producto) =>{
  const request = await fetchPersonal('/producto', producto, 'POST');
  const {message} = await request.json();
  return message;
};