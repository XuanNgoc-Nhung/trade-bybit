import React, { useState } from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { Tab } from '@headlessui/react';
import { LineChart, Line } from 'recharts';

interface TradingPair {
  symbol: string;
  icon: string;
  price: number;
  change24h: number;
  chartData: { value: number }[];
}

const TradingOpportunities = () => {
  const [selectedTab, setSelectedTab] = useState(0);

  const tradingPairs: TradingPair[] = [
    {
      symbol: 'BTCUSDT',
      icon: '/icons/btc.svg',
      price: 95904.1,
      change24h: 0.87,
      chartData: Array(20).fill(0).map(() => ({ value: Math.random() * 100 }))
    },
    {
      symbol: 'ETHUSDT',
      icon: '/icons/eth.svg',
      price: 1840.55,
      change24h: 1.75,
      chartData: Array(20).fill(0).map(() => ({ value: Math.random() * 100 }))
    },
    // Add more trading pairs as needed
  ];

  return (
    <div className="bg-white rounded-lg p-6 shadow-sm">
      <div className="flex justify-between items-center mb-6">
        <h2 className="text-2xl font-bold">Nắm Bắt Cơ Hội Giao Dịch</h2>
        <Link href="/market" className="text-orange-500 hover:text-orange-600">
          Tổng quan Thị trường →
        </Link>
      </div>

      <Tab.Group onChange={setSelectedTab}>
        <Tab.List className="flex space-x-4 border-b mb-4">
          <Tab className={({ selected }) =>
            `pb-2 px-1 ${selected ? 'text-orange-500 border-b-2 border-orange-500' : 'text-gray-500'}`
          }>
            Yêu Thích
          </Tab>
          <Tab className={({ selected }) =>
            `pb-2 px-1 ${selected ? 'text-orange-500 border-b-2 border-orange-500' : 'text-gray-500'}`
          }>
            Hot Phát Sinh
          </Tab>
          <Tab className={({ selected }) =>
            `pb-2 px-1 ${selected ? 'text-orange-500 border-b-2 border-orange-500' : 'text-gray-500'}`
          }>
            Hot Coin
          </Tab>
        </Tab.List>

        <Tab.Panels>
          <Tab.Panel>
            <div className="grid grid-cols-6 text-sm text-gray-500 py-2">
              <div>Cặp Giao Dịch</div>
              <div>Giá Mới Nhất</div>
              <div>Biến Động 24H</div>
              <div className="col-span-2">Chart</div>
              <div>Giao Dịch</div>
            </div>
            
            {tradingPairs.map((pair, index) => (
              <div key={pair.symbol} className="grid grid-cols-6 items-center py-4 border-b">
                <div className="flex items-center gap-2">
                  <Image src={pair.icon} alt={pair.symbol} width={24} height={24} />
                  <span>{pair.symbol}</span>
                </div>
                <div>{pair.price.toLocaleString()}</div>
                <div className={pair.change24h >= 0 ? 'text-green-500' : 'text-red-500'}>
                  {pair.change24h >= 0 ? '+' : ''}{pair.change24h}%
                </div>
                <div className="col-span-2">
                  <LineChart width={120} height={40} data={pair.chartData}>
                    <Line 
                      type="monotone" 
                      dataKey="value" 
                      stroke={pair.change24h >= 0 ? '#22C55E' : '#EF4444'} 
                      dot={false}
                    />
                  </LineChart>
                </div>
                <div>
                  <button className="px-4 py-1 border border-orange-500 text-orange-500 rounded hover:bg-orange-50">
                    Giao Dịch
                  </button>
                </div>
              </div>
            ))}
          </Tab.Panel>
          
          <Tab.Panel>
            {/* Content for Hot Phát Sinh tab */}
          </Tab.Panel>
          
          <Tab.Panel>
            {/* Content for Hot Coin tab */}
          </Tab.Panel>
        </Tab.Panels>
      </Tab.Group>
    </div>
  );
};

export default TradingOpportunities; 