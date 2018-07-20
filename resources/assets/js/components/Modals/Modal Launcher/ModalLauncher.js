import React, { Component } from 'react';
import PropTypes from 'prop-types';
import injectSheet from 'react-jss';
import styles from './ModalLauncherStyle'; // Import styles
import Modal from '../Modal/Modal'; // Import Modal component

// Declaration of the component as React Class Component
class ModalLauncher extends Component {
  
  // Init of the component before it is mounted.
  // Sets the modal visibility (showModal) to false.
  constructor(props) {
    super(props);
    this.state = {
      showModal: false,
    }; 
  }
  
  // Handle the visibility of the modal.
  // If `state.showModal` is false, sets it to true,
  // if is true, sets it to false.
  handleToggleModal() {
    this.setState({ showModal: !this.state.showModal });
  }

  render() {
    const { buttonLabel, children, sheet: { classes } } = this.props;
    const { showModal } = this.state;

    return (
      <div>
        <button
          type="button"
          className={classes.modalButton}
          onClick={() => this.handleToggleModal()}
        >
          {buttonLabel}
        </button>

        {showModal &&
          <Modal onCloseRequest={() => this.handleToggleModal()}>
              {children}
          </Modal>}
      </div>
    );
  }
}

ModalLauncher.propTypes = {
  buttonLabel: PropTypes.string.isRequired,
  children: PropTypes.oneOfType([
    PropTypes.arrayOf(PropTypes.node),
    PropTypes.node,
  ]),
  sheet: PropTypes.object,
  classes: PropTypes.object,
};

export default injectSheet(styles)(ModalLauncher);