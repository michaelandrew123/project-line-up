import { createStore } from 'vuex';
import axios from "axios";
import moment from 'moment';
import $ from 'jquery'

const state = {
    combos: [{
        id: 1,
        name: "michael"
    },
        {
        id: 2,
        name: "andrew"
    }],
};
const getters = {
    getCombo: (state) => state.combos,
};
const actions = {
    async fetchCombo({ commit }) {
        try {
            const response = await axios.get(
                "https://api.projectedlineups.com/v1/sports/teams?l=40&f[league]=nhl&p=1"
            );
            const data = response.data.data;


            const team_player_card = [];
            for (const item of data) {
                try {
                    const response1 = await axios.get(
                        `https://api.projectedlineups.com/v1/sports/teams/${item.slug}/formation`
                    );

                    // console.log('response ', response1.data.data)
                    const data1 = response1.data.data
                    if (data1) {
                        commit("SET_COMBO", {
                            teamSlug: data1.team.slug,
                            lw1: data1.slots.lw1
                        });
                    }

                    // Process response1 data here if needed
                } catch (error) {
                    console.log(error);
                }
            }
        } catch (error) {
            console.log(error);
        }
    },
};
const mutations = {
    SET_COMBO(state, { teamSlug, lw1 }) {
        state.combos[teamSlug] = lw1;
    }
};
export default {
    state,
    getters,
    actions,
    mutations,
};
