import React from 'react';
import { render } from 'react-dom';
import PropTypes from 'prop-types';
import injectSheet from 'react-jss';
import styles from './IndexStyles';
import SimpleModalLauncher from './SimpleModalLauncher/SimpleModalLauncher';

const App = ({ sheet: { classes } }) =>
  <div className={classes.appWrapper}>
    <header>
      <h1>React Simple Modal</h1>
      <p>
        This is an example on how to build a simple modal window with React
        and JSS.<br />
        To close modal, click on [X] button on top right, ESC key,
        or simply outside the window.
      </p>

      <p>
        Click here to follow the step by step tutorial to build this component:<br />
        <a href="">https://medium.com/@pppped/build-a-simple-modal-window-with-react-and-jss-f05041d899cc</a>
      </p>
    </header>

    <SimpleModalLauncher buttonLabel="Open text modal">
      <div className={classes.textModal}>
        <h2>Lorem ipsum dolor sit amet</h2>
        <p>
          Nullam tincidunt, nisl eget vestibulum rhoncus, elit nisi
          faucibus quam, sollicitudin posuere massa lacus cursus ligula.
          Quisque vel turpis a quam posuere lobortis. Aenean risus nunc,
          pretium eu massa tincidunt, dignissim tincidunt arcu. Integer et
          mauris vestibulum, pharetra eros nec, feugiat orci.
        </p>
      </div>
    </SimpleModalLauncher>

    <SimpleModalLauncher buttonLabel="Open image modal">
      <div className={classes.imageModal}>
        <img
          className={classes.imageInModal}
          src="https://placeimg.com/800/450/nature"
          alt="Nature"
        />
      </div>
    </SimpleModalLauncher>
  </div>;

App.propTypes = {
  sheet: PropTypes.object,
  classes: PropTypes.object
};

const StyledApp = injectSheet(styles)(App);

render(<StyledApp />, document.getElementById("root"));
