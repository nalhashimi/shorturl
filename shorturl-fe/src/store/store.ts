import { createStore, Store, useStore as baseUseStore } from 'vuex';
import shortURL from "@/components/ShortURL.vue";

// Define your store state
export interface State {
  count: number;
}

// Define injection key
export const key: InjectionKey<Store<State>> = Symbol();

export const store = createStore<State>({
  state: {
    count: 0,
    shortUrl: 'state-url',
  },
  mutations: {
    increment(state) {
      state.count++;
    },
    saveUrl(state, url):void {
      state.shortUrl = url;
    }
  },
  getters: {
    shortUrl: function (state) {
      return `${state.shortUrl}`
    }
  }
});

// Helper function to use the store with proper typing
export function useStore() {
  return baseUseStore(key);
}
