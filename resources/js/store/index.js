import { createStore } from 'vuex';
// import Vue from 'vue'
import axios from "axios";
import moment from 'moment';
import $ from 'jquery'
import combo from './modules/combo';


const store = createStore({
    state: {
        nhl: [],
        matchup: [],
        matchupLogo: [],
        shuffleTwoTeamPlayerCard: [],
        currentDate: moment(),
        formattedDate: '',
        loading: false, // Initial loading state is false
        loadingLogo: false, // Initial loading state is false
        isHighlighted: false,
    },

    getters: {
        getNhl: (state) => state.nhl,
        getMatchupSingleData: (state) => state.matchup,
        getMatchupLogo: (state) => state.matchupLogo,
        getShuffleTwoTeamPlayerCard: (state) =>  state.shuffleTwoTeamPlayerCard,
        getFormattedDate: state => state.formattedDate,
        isLoading: state => state.loading, // Getter to access loading state
        isLoadingLogo: state => state.loadingLogo, // Getter to access loading state
    },
    actions: {
        async fetchNhl({ commit }) {
            try {
                const data = await axios.get(
                    "https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl"
                ); 
                commit("SET_NHL", data.data);
            } catch (error) {
                console.log(error);
            }
        },
        async fetchNhlSeason({ commit, state, dispatch }, {dateParam}) {
            try {

                var firstID = null;
                const dateFormat = moment(dateParam).format('YYYY-MM-DD')

                const response = await axios.get(
                    `https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=${dateFormat}`
                );

                const data = response.data.data;

                data.map((item, key)=>{
                    if(key == 0){
                        firstID = item.id
                    }
                })
                await dispatch("fetchNhlSeasonId", {id: firstID})


                var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;

                $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});


                $('#logo-matchup').css({'grid-template-columns': 'repeat(' + data.length + ', 0fr)'})

                commit("SET_MATCHUP_SEASON", data);
            } catch (error) {
                console.log(error);
            }
        },
        async fetchNhlSeasonId({ commit, dispatch  }, {id}) {
            try {
                commit('SET_LOADING_LOGO', true);

                    var date = new Date()
                    const dateFormat = moment(date).format('YYYY-MM-DD')
                    const response = await axios.get(
                        `https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games/${id}?f[date]=${dateFormat}`
                    );
                    const data = response.data;

                    await dispatch("fetchNhlTeamPlayer", { home_id: data.data.starting_goalies.home.team.id, away_id: data.data.starting_goalies.away.team.id });

                    // commit('setNhlMatchupImageItemCount', $('.nhl-matchup-image-list > .nhl-matchup-image-item').length);

                var nhlMatch = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;




                    // var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                    // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});


                    commit("SET_SINGLE_MATCHUP", data.data);
                commit('SET_LOADING_LOGO', false);
            } catch (error) {
                console.log(error);
            }

            var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;


        },
        async fetchNhlTeamPlayer({commit, dispatch}, { home_id, away_id }){
            try{
                const responseHome = await axios.get(
                    `https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]=${home_id}`
                );
                const responseAway = await axios.get(
                    `https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]=${away_id}`
                );
                const dataHome = responseHome.data.data;
                const dataAway = responseAway.data.data;
                const shuffledArray = await dispatch("shuffleArray", {array: dataHome.concat(dataAway)});
                var nhlMatchupImageItemCount = shuffledArray.length;
                //
                // let nhlMatchupCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupCount + ', 1fr)'});
                // console.log('fetch Nhl Season Id ', nhlMatchupCount);


                // var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});


                commit("SET_TWO_TEAM_PLAYER_CARD", shuffledArray)
            }catch(error){
                console.log(error);
            }
        },
        async shuffleArray({ commit }, { array }) {
            try {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
                return array;
            } catch (error) {
                console.error('Error shuffling array:', error);
                throw error;
            }
        },
        async getCurrentDate({ commit, dispatch }, newDate){
            commit('SET_LOADING', true);
                const formattedDate = moment(newDate).format('dddd, MMMM D, YYYY');
                await dispatch("fetchNhlSeason", {dateParam: newDate});
                commit('SET_FORMATTED_DATE', formattedDate);
            commit('SET_LOADING', false);
        },
        async subtractOneDay({ commit, state, dispatch }) {
            commit('SET_LOADING', true);
                const newDate = state.currentDate.clone().subtract(1, 'day');
                await dispatch('getCurrentDate', newDate);
                commit('SET_CURRENT_DATE', newDate);
            commit('SET_LOADING', false);
        },
        async addOneDay({ commit, state, dispatch }) {
            // Show loading state
            commit('SET_LOADING', true);
                const newDate = state.currentDate.clone().add(1, 'day');
                await dispatch('getCurrentDate', newDate);
                commit('SET_CURRENT_DATE', newDate);
            commit('SET_LOADING', false);
        },
        toggleHighlight({ commit, state }) {
            commit('highlight', !state.isHighlighted);
        },
    },

    mutations: {
        SET_NHL(state, payload) {
            state.nhl = payload;
        },
        SET_MATCHUP_SEASON(state, payload){
            state.matchupLogo = payload;
        },
        SET_SINGLE_MATCHUP(state, payload){
            state.matchup = payload;
        },
        SET_TWO_TEAM_PLAYER_CARD(state, payload){
            state.shuffleTwoTeamPlayerCard = payload;
        },
        SET_FORMATTED_DATE(state, payload) {
            state.formattedDate = payload;
        },
        SET_CURRENT_DATE(state, payload) {
            state.currentDate = payload;
        },
        SET_LOADING(state, payload) {
            state.loading = payload;
        },
        SET_LOADING_LOGO(state, payload){
            state.loadingLogo = payload;
        },
        highlight(state, value) {
            state.isHighlighted = value;
        },
    },
    modules: {
        combo
    }

});

export default store;