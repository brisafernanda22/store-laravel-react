import { Button, Card, Col, Text } from '@nextui-org/react';
import PropTypes from 'prop-types';
import './style/index.css';

const CardImage = ({ id, title, src, setBuys, precio }) => {
  
  const handleBuy = () =>setBuys(b => [...b, { id, title, precio }]);

  return (
    <Card>
      <Card.Header css={{ position: "absolute", zIndex: 1, top: 5 }}>
        <Col>
          <Text size={12} weight="bold" transform="uppercase" color="black">
            {id}
          </Text>
          <Text className="shadow-text" h4 color="black">
            {title}
          </Text>
          <Text className="shadow-text" h4 color="black">
            ${precio}
          </Text>
          <Button onPress={handleBuy} size="xs" style={{ backgroundColor: 'yellow', color: 'black' }} >
            comprar
          </Button>
        </Col>
        
      </Card.Header>
      <Card.Image
        src={src}
        objectFit="cover"
        width="100%"
        height={150}
      />
    </Card>
  );
};

CardImage.propTypes = {
  id: PropTypes.string.isRequired,
  title: PropTypes.string.isRequired,
  src: PropTypes.string.isRequired
}

export default CardImage;
