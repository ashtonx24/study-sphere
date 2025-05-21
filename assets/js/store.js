// assets/js/store.js
(function (global) {
    // Initialize state with session data if available from PHP.
    // (PHP will output window.__USER__ in the header if a session exists.)
    let state = {
      user: global.__USER__ || null,
    };
  
    const listeners = [];
  
    function getState() {
      return { ...state };
    }
  
    function setState(newState) {
      state = { ...state, ...newState };
      // Notify all subscribers about the update
      listeners.forEach((listener) => listener(getState()));
    }
  
    function subscribe(listener) {
      if (typeof listener === 'function') {
        listeners.push(listener);
        // Return an unsubscribe function
        return function unsubscribe() {
          const index = listeners.indexOf(listener);
          if (index > -1) {
            listeners.splice(index, 1);
          }
        };
      }
    }
  
    // Expose the store on the global window object
    global.Store = {
      getState,
      setState,
      subscribe,
    };
  })(window);  