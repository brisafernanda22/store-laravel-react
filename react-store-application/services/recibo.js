import { fetchPersonal } from "../src/utils/request";


export const registerBuy = async (recibo) =>{
  const request = await fetchPersonal('/recibo', recibo, 'POST');
  const {message} = await request.json();
  return message;
};