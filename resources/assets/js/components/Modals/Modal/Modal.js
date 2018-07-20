import React, { Component } from 'react';
import PropTypes from 'prop-types';
import injectSheet from 'react-jss';
import isNil from 'lodash/fp/isNil';
import styles from './ModalStyles'; // Import styles

// Declaration of the component as React Class Component
class Modal extends Component {

  // Init of the component before it is mounted.
  constructor(props) {
    super(props);

    this.handleOnClick = this.handleOnClick.bind(this);
  }

  // Add listeners immediately after the component is mounted.
  componentDidMount() {
    document.addEventListener('click', this.handleOnClick, false);
  }

  // Remove listeners immediately before a component is unmounted and destroyed.
  componentWillUnmount() {
    document.removeEventListener('click', this.handleOnClick, false);
  }

  // Handle the mouse click on browser window.
  handleOnClick(e) {
    const { onCloseRequest } = this.props;

    if (!isNil(this.modal)) {
      if (!this.modal.contains(e.target)) {
        onCloseRequest();
        document.removeEventListener('click', this.handleOnClick, false);
      }
    }
  }

  // Render the component passing onCloseRequest and children as props.
  render() {
    const {
      onCloseRequest,
      children,
      sheet: { classes },
    } = this.props;

    return (
      <div className={classes.modalOverlay}>
        <div
          className={classes.modal}
          ref={node => (this.modal = node)}
        >
          <div className={classes.modalHeader}>
            {children}
          </div>
          <div className={classes.modalContent}>
            {children}
          </div>
        </div>
        <div className={classes.modalFooter}>

          <button
            type="button"
            // className={classes.closeButton}
            onClick={onCloseRequest}>
            {children}
          </button>
        </div>
      </div>
    );
  }
}

Modal.propTypes = {
  onCloseRequest: PropTypes.func,
  children: PropTypes.oneOfType([
    PropTypes.arrayOf(PropTypes.node),
    PropTypes.node,
  ]),
  sheet: PropTypes.object,
  classes: PropTypes.object,
};

// Export the component to use it in other components.
export default injectSheet(styles)(Modal);