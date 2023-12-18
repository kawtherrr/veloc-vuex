import axiosClient from '@/axios/axiosClient.js';

const state = {
    user : {},
    agency: {},
};
const getters = {};
const actions = {

    getUser({commit}){

        axiosClient.post("/getUser").then(
            response=> {
                commit('setUser',response.data)
            }
        )
    },

    loginUser({}, user){
        axiosClient.post("/checklogin", {
            email: user.email,
            password: user.password
        })
        .then(res => {
           console.log(res)
            if(res.data.token){
                localStorage.setItem('user', JSON.stringify(res.data.user))
                localStorage.setItem('token', res.data.token)
                localStorage.setItem('name', JSON.stringify(res.data.name))
                window.location.replace('/agency/dashboard');
            }else{
                alert("Email or Password is incorrect")
            }
        })

    }
};
const mutations = {
    setUser(state, data){
        state.user = data.user;
        state.agency= data.agency;
    }
};

export default {
    namespaced  : true,

    state,
    getters, 
    actions,
    mutations
}
