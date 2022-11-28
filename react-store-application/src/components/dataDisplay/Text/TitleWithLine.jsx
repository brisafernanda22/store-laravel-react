import { Text } from '@nextui-org/react';
import React from 'react'

const TitleWithLine = ({title, gradient}) => (
  <>
    <Text
      h1
      size={60}
      css={{
        textGradient: gradient ?? "45deg, $blue600 -20%, $pink600 50%",
      }}
      weight="bold"
    >
      {title}
    </Text>
    <div className='divider' />
  </>
);

export default TitleWithLine;
